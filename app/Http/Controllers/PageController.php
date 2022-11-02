<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class PageController extends Controller
{

    public function checkLogin()
    {
        if (Auth::check()) {
            return redirect('/homepage');
        } else {
            return redirect('/login');
        }
    }
    public function home()
    {
        if (Auth::check()) {
            $data = DB::select('SELECT * FROM game');

            foreach ($data as $obj) {
                $publishers = DB::select('SELECT * FROM publisher, publishes where publisher.publisher_id = publishes.publisher_id AND
                publishes.game_id = ?', [$obj->game_id]);

                $developers = DB::select('SELECT * FROM developer, develops where developer.developer_id = develops.developer_id AND
                develops.game_id = ?', [$obj->game_id]);

                $positiveReviewCount = DB::select('SELECT COUNT(*) AS positive FROM review WHERE review.game_id = ? AND review.opinion = "Yes"', [$obj->game_id]);
                $reviewCount = DB::select('SELECT COUNT(*) as count FROM review WHERE game_id = ?', [$obj->game_id]);

                $obj->publishers = json_encode($publishers);
                $obj->developers = json_encode($developers);
                $obj->reviewCount = $reviewCount[0]->count;
                if ($reviewCount[0]->count != 0) {
                    $obj->rating = $positiveReviewCount[0]->positive / $reviewCount[0]->count;
                    $obj->rating = $obj->rating * 100;
                } else {
                    $obj->rating = 0;
                }
            }
            return view('pages.homepage', ['data' => $data]);
        } else {
            return redirect('/login');
        }
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect('/homepage');
        } else {
            return view('pages.login');
        }
    }
    public function signup()
    {
        if (Auth::check()) {
            return redirect('/homepage');
        } else {
            return view('pages.signup');
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect('/login');
    }

    public function editProfile()
    {
        if (Auth::check()) {
            return view('pages.profile');
        } else {
            return redirect('/login');
        }
    }

    public function admin()
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == 'admin') {
                return view('pages.admin');
            } else {
                return redirect('/homepage');
            }
        } else {
            return redirect('/login');
        }
    }

    public function viewCart()
    {
        if (Auth::check()) {
            $data = DB::select('SELECT game.game_id, game.game_cover_image, game.game_title, game.game_price, game.game_linux_support, game.game_windows_support, game.game_mac_support FROM game where game.game_id in (SELECT cart.game_id from cart where cart.username = ?)', [Auth::user()->username]);

            $total = 0;
            foreach ($data as $obj) {
                $total += $obj->game_price;
            }
            return view('pages.shopping-cart', ['data' => $data, 'total' => $total]);
        } else {
            return redirect('/login');
        }
    }

    public function viewLibrary()
    {
        if (Auth::check()) {
            if (Auth::user()->user_type = "user") {
                $data = DB::select("SELECT * FROM game, owns WHERE game.game_id = owns.game_id AND owns.username = ? ", [Auth::user()->username]);
                foreach ($data as $obj) {
                    $publishers = DB::select('SELECT * FROM publisher, publishes where publisher.publisher_id = publishes.publisher_id AND
                publishes.game_id = ?', [$obj->game_id]);

                    $developers = DB::select('SELECT * FROM developer, develops where developer.developer_id = develops.developer_id AND
                develops.game_id = ?', [$obj->game_id]);

                    $positiveReviewCount = DB::select('SELECT COUNT(*) AS positive FROM review WHERE review.game_id = ? AND review.opinion = "Yes"', [$obj->game_id]);
                    $reviewCount = DB::select('SELECT COUNT(*) as count FROM review WHERE game_id = ?', [$obj->game_id]);

                    $obj->publishers = json_encode($publishers);
                    $obj->developers = json_encode($developers);
                    $obj->reviewCount = $reviewCount[0]->count;
                    if ($reviewCount[0]->count != 0) {
                        $obj->rating = $positiveReviewCount[0]->positive / $reviewCount[0]->count;
                        $obj->rating = $obj->rating * 100;
                    } else {
                        $obj->rating = 0;
                    }
                }
                return view('pages.homepage', ['data' => $data]);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('/login');
        }
    }

    public function displayGame($id)
    {
        $data = DB::select('SELECT * FROM game WHERE game_id = ?', [$id])[0];
        $publishers = DB::select('SELECT * FROM publisher, publishes where publisher.publisher_id = publishes.publisher_id AND
        publishes.game_id = ?', [$id]);
        $developers = DB::select('SELECT * FROM developer, develops where developer.developer_id = develops.developer_id AND
        develops.game_id = ?', [$id]);
        $reviews = DB::select('SELECT review.review_id, review.username, users.user_avatar, review.opinion, review.post_date, review.message FROM review NATURAL join users where review.game_id = ?', [$id]);
        foreach ($reviews as $obj) {
            $likes = DB::select('SELECT COUNT(*) as count FROM likes WHERE review_id = ? AND type="helpful"', [$obj->review_id]);
            $dislikes = DB::select('SELECT COUNT(*) as count FROM likes WHERE review_id = ? AND type="unhelpful"', [$obj->review_id]);
            $obj->likes = $likes[0]->count;
            $obj->dislikes = $dislikes[0]->count;
        }
        $data->publishers = $publishers;
        $data->developers = $developers;
        if (Auth::check()) {
            return view('pages.game-page', ['data' => $data, 'reviews' => $reviews]);
        } else {
            return redirect('/login');
        }
    }

    public function chooseCard()
    {
        $username = Auth::user()->username;
        $data = DB::select('SELECT payment_card.card_id, payment_card.payment_method, payment_card.card_number, payment_card.first_name, payment_card.last_name, payment_card.expiration_date FROM payment_card WHERE username = ?', [$username]);
        if (count($data) == 0) {
            return redirect('/addPaymentCard');
        }
        return view('pages.choose-card', ['data' => $data]);
    }

    public function viewAddPaymentCard()
    {
        return view('pages.add-payment-card', ['user' => Auth::user()->username], ['data' => null, 'mode' => 'add']);
    }

    public function viewEditPaymentCard($card_id)
    {
        $data = DB::select('SELECT * FROM payment_card WHERE card_id = ?', [$card_id])[0];
        return view('pages.add-payment-card', ['data' => $data, 'mode' => 'edit']);
    }

    public function viewAddGame()
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == 'admin') {
                return view('pages.add-game', ['data' => null, "mode" => 'add']);
            } else {
                return redirect('/homepage');
            }
        } else {
            return redirect('/login');
        }
    }

    public function viewEditGame($id)
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == 'admin') {
                $data = DB::table('game')->where('game_id', $id)->first();
                foreach ($data as $obj) {
                    $developer = DB::select("SELECT * from developer, develops where developer.developer_id = develops.developer_id AND develops.game_id = $id")[0];
                    $publisher = DB::select("SELECT * from publisher, publishes where publisher.publisher_id = publishes.publisher_id AND publishes.game_id = $id")[0];
                    $data->developer_name = $developer->developer_name;
                    $data->publisher_name = $publisher->publisher_name;
                }
                return view('pages.add-game', ['data' => $data, "mode" => 'edit']);
            } else {
                return redirect('/homepage');
            }
        } else {
            return redirect('/login');
        }
    }


    public function viewManageDevsPubs()
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == 'admin') {
                return view('pages.manage-devs-pubs');
            } else {
                return redirect('/homepage');
            }
        } else {
            return redirect('/login');
        }
    }
}
