<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
{
    public function verify($token){
        $user = User::where('confirmation_token',$token)->first();
        if (is_null($user))
        {
            return redirect('/');
        }
        $user->is_confirmed = 1;
        $user->confirmation_token = str_random(40);
        $user->save();
        Session::flash('email_confirmed','邮箱验证通过请登录');
        return redirect('/user/login');
    }
}
