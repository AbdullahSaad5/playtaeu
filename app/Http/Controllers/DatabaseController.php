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
}
