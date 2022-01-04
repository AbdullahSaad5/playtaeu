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
                if (Auth::user()->user_type == 'admin') {
                    return redirect('/admin');
                } else {
                    return redirect('/homepage');
                }
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

        if ($username == $confirm) {
            DB::table('users')->insert(
                ['username' => $username, 'password' => Hash::make($password)]
            );
            return redirect('/login');
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
}
