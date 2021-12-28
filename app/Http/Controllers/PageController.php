<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.homepage');
    }
    public function login()
    {
        return view('pages.login');
    }
    public function signup()
    {
        return view('pages.signup');
    }
}
