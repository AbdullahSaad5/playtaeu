<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class DatabaseController extends Controller
{
    public function authenticateUser()
    {
        $username = request('username');
        $password = request('password');
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            if (Auth::user()->blocked_status != '1') {
                return redirect('/homepage');
            } else {
                Auth::logout();
                return redirect('/login')->with('error', 'Your account has been blocked by Administrator!');
            }
        } else {

            return redirect('/login')->with('error', 'Invalid Credentials!');
        }
    }

    public function registerUser()
    {
        $username  = request('username');
        $confirm  = request('confirm');
        $password  = request('password');

        $user = DB::table('users')->where('username', $username)->first();

        if ($username == $confirm) {
            if ($user) {
                return redirect('/signup')->with('error', 'Username already exists!');
            } else {
                DB::table('users')->insert(
                    ['username' => $username, 'password' => Hash::make($password)]
                );
                return redirect('/login')->with('success', 'Registration Successful!');
            }
        } else {
            $error = 'Usernames do not match';
            return redirect('/signup')->with('error', $error);
        }
    }

    public function addPaymentCard()
    {
        $request = Request::capture();
        $payment_method = $request->get('payment_method');
        $card_number = request('card-number');
        $security_code = request('security-code');
        $expiration_date = request('expiration-date');
        $first_name = request('first-name');
        $last_name = request('last-name');
        $city = request('city');
        $billing_address = request('billing-address');
        $zipcode = request('zipcode');
        $billing_address2 = request('secondary-billing-address');
        $country = $request->get('country');
        $phone_number = request('phone-number');


        DB::table('payment_card')->insert(
            ['username' => Auth::user()->username, 'payment_method' => $payment_method, 'card_number' => $card_number, 'security_code' => $security_code, 'expiration_date' => $expiration_date, 'first_name' => $first_name, 'last_name' => $last_name, 'city' => $city, 'billing_address_1' => $billing_address, 'zipcode' => $zipcode, 'billing_address_2' => $billing_address2, 'country' => $country, 'phone_number' => $phone_number]
        );

        return redirect('/choose-card');
    }

    public function removeItem($gameID)
    {
        DB::delete('DELETE FROM cart WHERE cart.game_id = ? AND cart.username = ?', [$gameID, Auth::user()->username]);
        $record = DB::select('SELECT * FROM cart WHERE cart.username = ?', [Auth::user()->username]);
        if (count($record) > 0) {
            return redirect('/cart');
        } else {
            return redirect('/homepage');
        }
    }

    public function addToCart($gameID)
    {
        DB::insert('INSERT INTO cart (username, game_id) VALUES (?, ?)', [Auth::user()->username, $gameID]);
        return redirect('/cart');
    }

    public function checkout()
    {
        $cart = DB::select('SELECT * FROM cart WHERE cart.username = ?', [Auth::user()->username]);
        foreach ($cart as $item) {
            DB::insert('INSERT INTO owns (username, game_id) VALUES (?, ?)', [Auth::user()->username, $item->game_id]);
        }
        DB::delete('DELETE FROM cart WHERE cart.username = ?', [Auth::user()->username]);
        return redirect('/homepage');
    }

    public function updatePaymentCard($card_id)
    {
        $request = Request::capture();
        $payment_method = $request->get('payment_method');
        $card_number = request('card-number');
        $security_code = request('security-code');
        $expiration_date = request('expiration-date');
        $first_name = request('first-name');
        $last_name = request('last-name');
        $city = request('city');
        $billing_address = request('billing-address');
        $zipcode = request('zipcode');
        $billing_address2 = request('secondary-billing-address');
        $country = $request->get('country');
        $phone_number = request('phone-number');

        // Update database
        DB::table('payment_card')
            ->where('card_id', $card_id)
            ->update(['payment_method' => $payment_method, 'card_number' => $card_number, 'security_code' => $security_code, 'expiration_date' => $expiration_date, 'first_name' => $first_name, 'last_name' => $last_name, 'city' => $city, 'billing_address_1' => $billing_address, 'zipcode' => $zipcode, 'billing_address_2' => $billing_address2, 'country' => $country, 'phone_number' => $phone_number]);

        return redirect('/choose-card');
    }

    public function addGame()
    {
        $request = Request::capture();
        $gameTitle = request('game-title');
        $gameDescription = request('game-description');
        $gamePrice = request('game-price');
        $gameWindowsSupport =  $request->input('game-windows-support') ? 1 : 0;
        $gameMacSupport =  $request->input('game-mac-support') ? 1 : 0;
        $gameLinuxSupport =  $request->input('game-linux-support') ? 1 : 0;
        $gameThumbnailImage = request('game-thumbnail-image');
        $gameThumbnailVideo = request('game-thumbnail-video');
        $gameCoverImage = request('game-cover-image');
        $gameDetailImage1 = request('game-detail-image1');
        $gameDetailImage2 = request('game-detail-image2');
        $gameDetailImage3 = request('game-detail-image3');
        $gameDetailImage4 = request('game-detail-image4');
        $gameDetailVideo = request('game-detail-video');
        $gameReleaseDate = request('game-release-date');

        $developerName = request('developer-name');
        $publisherName = request('publisher-name');

        $developers = DB::select('SELECT developer.developer_id FROM developer WHERE developer.developer_name = ?', [$developerName]);
        $publishers = DB::select('SELECT publisher.publisher_id FROM publisher WHERE publisher.publisher_name = ?', [$publisherName]);

        if (count($developers) == 0 || count($publishers)) {
            return back()->with('error', 'Developer or Publisher does not exist');
        }

        DB::insert('INSERT INTO game (game_title, game_description, game_price, game_windows_support, game_mac_support, game_linux_support, game_thumbnail_image, game_thumbnail_video, game_cover_image, game_detail_image1, game_detail_image2, game_detail_image3, game_detail_image4, game_detail_video, game_release_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$gameTitle, $gameDescription, $gamePrice, $gameWindowsSupport, $gameMacSupport, $gameLinuxSupport, $gameThumbnailImage, $gameThumbnailVideo, $gameCoverImage, $gameDetailImage1, $gameDetailImage2, $gameDetailImage3, $gameDetailImage4, $gameDetailVideo, $gameReleaseDate]);

        $gameID = DB::select('SELECT game.game_id FROM game WHERE game.game_title = ?', [$gameTitle])[0]->game_id;

        // Add developer to develops table
        $developers = $developers[0];
        $publishers = $publishers[0];

        foreach ($developers as $developer) {
            DB::insert('INSERT INTO develops (developer_id, game_id) VALUES (?, ?)', [$developer->developer_id, $gameID]);
        }
        foreach ($publishers as $publisher) {
            DB::insert('INSERT INTO publishes (publisher_id, game_id) VALUES (?, ?)', [$publisher->publisher_id, $gameID]);
        }
        return redirect('/admin');
    }

    public function updateGame($id)
    {
        $request = Request::capture();
        $gameTitle = request('game-title');
        $gameDescription = request('game-description');
        $gamePrice = request('game-price');
        $gameWindowsSupport =  $request->input('game-windows-support');
        if ($gameWindowsSupport == 'on') {
            $gameWindowsSupport = 1;
        } else {
            $gameWindowsSupport = 0;
        }
        $gameMacSupport =  $request->input('game-mac-support');
        if ($gameMacSupport == 'on') {
            $gameMacSupport = 1;
        } else {
            $gameMacSupport = 0;
        }
        $gameLinuxSupport =  $request->input('game-linux-support');
        if ($gameLinuxSupport == 'on') {
            $gameLinuxSupport = 1;
        } else {
            $gameLinuxSupport = 0;
        }
        $gameThumbnailImage = request('game-thumbnail-image');
        $gameThumbnailVideo = request('game-thumbnail-video');
        $gameCoverImage = request('game-cover-image');
        $gameDetailImage1 = request('game-detail-image1');
        $gameDetailImage2 = request('game-detail-image2');
        $gameDetailImage3 = request('game-detail-image3');
        $gameDetailImage4 = request('game-detail-image4');
        $gameDetailVideo = request('game-detail-video');
        $gameReleaseDate = request('game-release-date');

        $developerName = request('developer-name');
        $publisherName = request('publisher-name');

        $developers = DB::select('SELECT developer.developer_id FROM developer WHERE developer.developer_name = ?', [$developerName]);
        $publishers = DB::select('SELECT publisher.publisher_id FROM publisher WHERE publisher.publisher_name = ?', [$publisherName]);

        if (count($developers) == 0 || count($publishers) == 0) {
            return back()->with('error', 'Developer or Publisher does not exist');
        }

        DB::table('game')
            ->where('game_id', $id)
            ->update(['game_title' => $gameTitle, 'game_description' => $gameDescription, 'game_price' => $gamePrice, 'game_windows_support' => $gameWindowsSupport, 'game_mac_support' => $gameMacSupport, 'game_linux_support' => $gameLinuxSupport, 'game_thumbnail_image' => $gameThumbnailImage, 'game_thumbnail_video' => $gameThumbnailVideo, 'game_cover_image' => $gameCoverImage, 'game_detail_image1' => $gameDetailImage1, 'game_detail_image2' => $gameDetailImage2, 'game_detail_image3' => $gameDetailImage3, 'game_detail_image4' => $gameDetailImage4, 'game_detail_video', $gameDetailVideo, 'game_release_date', $gameReleaseDate]);

        $gameID = DB::select('SELECT game.game_id FROM game WHERE game.game_title = ?', [$gameTitle])[0]->game_id;

        $developers = $developers[0];
        $publishers = $publishers[0];

        // Update developer and publishers
        DB::table('develops')
            ->where('game_id', $gameID)
            ->update(['developer_id', $developers->developer_id]);

        DB::table('publishes')
            ->where('game_id', $gameID)
            ->update(['publisher_id', $publishers->publisher_id]);
        return redirect('/admin');
    }

    public function getDevelopers($input)
    {
        $developers = DB::select('SELECT developer.developer_name FROM developer where developer.developer_name LIKE ?', ['%' . $input . '%']);
        return $developers;
    }

    public function getPublishers($input)
    {
        $publishers = DB::select('SELECT publisher.publisher_name FROM publisher where publisher.publisher_name LIKE ?', ['%' . $input . '%']);
        return $publishers;
    }

    public function updateProfile()
    {
        $request = Request::capture();
        $username = Auth::user()->username;
        $newUsername = request('username');
        $realName = request('real-name');
        $email = request('user-email');
        $country = $request->get('user-country');
        $province = $request->get('user-province');
        $summary = request('user-summary');

        DB::table('users')
            ->where('username', $username)
            ->update(['username' => $newUsername, 'user_real_name' => $realName, 'user_email' => $email, 'user_country' => $country, 'user_province' => $province, 'user_summary' => $summary]);
        return redirect('/edit-profile')->with('success', 'Profile updated successfully');
    }

    public function updateAvatar()
    {
        $username = Auth::user()->username;
        $avatar = request('avatar');

        DB::table('users')
            ->where('username', $username)
            ->update(['user_avatar' => $avatar]);
        return redirect('/edit-profile')->with('success', 'Avatar updated successfully');
    }

    public function updatePassword()
    {
        $password = request('current-password');
        $newPassword = request('updated-password');
        $confirmPassword = request('confirm-password');

        if ($newPassword != $confirmPassword) {
            return back()->with('error', 'Passwords do not match');
        } else if (Hash::check($newPassword, Auth::user()->password)) {
            return back()->with('error', 'New password cannot be the same as the old password');
        } else if (Hash::check($password, Auth::user()->password)) {
            DB::table('users')
                ->where('username', Auth::user()->username)
                ->update(['password' => Hash::make($newPassword)]);
            return redirect('/edit-profile')->with('success', 'Password updated successfully');
        } else {
            return back()->with('error', 'Wrong password');
        }
    }
    public function deleteProfile()
    {
        $password = request('password');
        if (Hash::check($password, Auth::user()->password)) {
            DB::table('users')
                ->where('username', Auth::user()->username)
                ->delete();
            return redirect('/login')->with('success', 'Profile deleted successfully');
        } else {
            return back()->with('error', 'Wrong password');
        }
    }

    public function addLike($id)
    {
        $username = Auth::user()->username;
        $like = DB::select('SELECT * FROM likes WHERE likes.review_id = ? AND likes.username = ?', [$id, $username]);
        if (count($like) == 0) {
            DB::insert('INSERT INTO likes (username, review_id, type) VALUES (?, ?, ?)', [$username, $id, 'helpful']);
        } else {
            DB::table('likes')
                ->where('review_id', $id)
                ->where('username', $username)
                ->update(['type' => 'helpful']);
        }
        $totalLikes = DB::select('SELECT COUNT(*) AS total_likes FROM likes WHERE likes.review_id = ? AND likes.type = "helpful"', [$id])[0]->total_likes;
        $totalDislikes = DB::select('SELECT COUNT(*) AS total_dislikes FROM likes WHERE likes.review_id = ? AND likes.type = "unhelpful"', [$id])[0]->total_dislikes;

        $counts = array(
            'totalLikes' => $totalLikes,
            'totalDislikes' => $totalDislikes
        );

        return $counts;
    }

    public function addDislike($id)
    {
        $username = Auth::user()->username;
        $like = DB::select('SELECT * FROM likes WHERE likes.review_id = ? AND likes.username = ?', [$id, $username]);
        if (count($like) == 0) {
            DB::insert('INSERT INTO likes (username, review_id, type) VALUES (?, ?, ?)', [$username, $id, 'unhelpful']);
        } else {
            DB::table('likes')
                ->where('review_id', $id)
                ->where('username', $username)
                ->update(['type' => 'unhelpful']);
        }
        $totalLikes = DB::select('SELECT COUNT(*) AS total_likes FROM likes WHERE likes.review_id = ? AND likes.type = "helpful"', [$id])[0]->total_likes;
        $totalDislikes = DB::select('SELECT COUNT(*) AS total_dislikes FROM likes WHERE likes.review_id = ? AND likes.type = "unhelpful"', [$id])[0]->total_dislikes;
        $counts = array(
            'totalLikes' => $totalLikes,
            'totalDislikes' => $totalDislikes
        );
        return $counts;
    }

    public function addPublisher()
    {
        $name = request('publisher-name');
        $website  = request('publisher-website');
        $logo = request('publisher-logo');

        DB::insert('INSERT INTO publisher (publisher_name, publisher_website, publisher_logo) VALUES (?, ?, ?)', [$name, $website, $logo]);
        return redirect()->back()->with('success', 'Publisher added successfully');
    }


    public function addDeveloper()
    {
        $name = request('developer-name');
        $website  = request('developer-website');
        $logo = request('developer-logo');

        DB::insert('INSERT INTO developer (developer_name, developer_website, developer_logo) VALUES (?, ?, ?)', [$name, $website, $logo]);
        return redirect()->back()->with('success', 'Developer added successfully');
    }
}
