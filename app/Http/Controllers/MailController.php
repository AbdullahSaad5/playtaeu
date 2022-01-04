<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;


class MailController extends Controller
{


    public function sendMail()
    {
        $username = request('username');
        $data = DB::select('select * from users where username = ?', [$username])[0];
        $details = $data;
        Mail::to($data->user_email)->send(new ForgotPassword($details));
        return redirect('/login');
    }
}
