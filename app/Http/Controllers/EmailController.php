<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function verify($token){
        $user = User::where('confirmation_token',$token)->first();
//        if (is_null($user))
//        {
//            return redirect('/');
//        }
        return redirect('/');
    }
}
