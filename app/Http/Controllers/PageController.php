<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function displayGame()
    {
        if (Auth::check()) {
            return view('pages.game-page');
        } else {
            return redirect('/login');
        }
    }
}
