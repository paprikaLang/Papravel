<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register()
    {
        return view('users.register');
    }
    public function store(UserRegisterRequest $request) {

           //保存
//        User::create($request->all());
        User::create(array_merge($request->all(),['avatar'=>'images/default_avatar.PNG']));
        return redirect('/');
    }
}
