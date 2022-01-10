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


                $obj->publishers = json_encode($publishers);
                $obj->developers = json_encode($developers);
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

    public function displayGame($id)
    {
        $data = DB::select('SELECT * FROM game WHERE game_id = ?', [$id])[0];
        $publishers = DB::select('SELECT * FROM publisher, publishes where publisher.publisher_id = publishes.publisher_id AND
        publishes.game_id = ?', [$id]);
        $developers = DB::select('SELECT * FROM developer, develops where developer.developer_id = develops.developer_id AND
        develops.game_id = ?', [$id]);
        $data->publishers = $publishers;
        $data->developers = $developers;
        if (Auth::check()) {
            return view('pages.game-page', ['data' => $data]);
        } else {
            return redirect('/login');
        }
    }

    public function chooseCard()
    {
        $username = Auth::user()->username;
        $data = DB::select('SELECT payment_card.card_id, payment_card.payment_method, payment_card.card_number, payment_card.first_name, payment_card.last_name, payment_card.expiration_date FROM payment_card WHERE username = ?', [$username]);
        if (count($data) == 0) {
            return redirect('/addPaymentCard/user=' . $username);
        }
        return view('pages.choose-card', ['data' => $data]);
    }

    public function viewAddPaymentCard()
    {
        return view('pages.add-payment-card', ['user' => Auth::user()->username], ['data' => null]);
    }

    public function viewEditPaymentCard($card_id)
    {
        $data = DB::select('SELECT * FROM payment_card WHERE card_id = ?', [$card_id])[0];
        return view('pages.add-payment-card', ['data' => $data]);
    }

    public function viewAddGame()
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == 'admin') {
                return view('pages.add-game');
            } else {
                return redirect('/homepage');
            }
        } else {
            return redirect('/login');
        }
    }


    // Testings
    public function viewReviews()
    {
        if (Auth::check()) {
            // $data = DB::select('SELECT * FROM review');
            return view('pages.review');
        } else {
            return redirect('/homepage');
        }
    }
}
