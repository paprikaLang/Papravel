<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;
use Naux\Mail\SendCloudTemplate;
class UsersController extends Controller
{
    public function register()
    {
        return view('users.register');
    }
    public function store(UserRegisterRequest $request) {

           //保存
//        User::create($request->all());
      $user = User::create(array_merge($request->all(),['avatar'=>'images/default_avatar.PNG','confirmation_token'=>str_random(40)]));
      $this->sendVerifyEmailTo($user);
//        return redirect('/');
    }
    public function sendVerifyEmailTo($user){
//        dd($user->confirmation_token);
        $bind_data = ['url' => route('email.verify',['token'=>$user->confirmation_token]),
                      'name'=> $user->name
                     ];
        $template = new SendCloudTemplate('test_papravel', $bind_data);

        Mail::raw($template, function ($message) use ($user) {
            $message->from('langtianyao1102@gmail.com', 'Papravel');
            $message->to($user->email);
        });
    }
}
