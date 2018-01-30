<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Image;
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
        $user = User::create(array_merge($request->all(),['avatar'=>'/images/default_avatar.PNG','confirmation_token'=>str_random(40)]));
        $this->sendVerifyEmailTo($user);
        Session::flash('confirm_email','请到邮箱验证您的申请');
        return redirect('/');
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

    public function login() {
        return view('users.login');
    }
    public function signIn(UserLoginRequest $request) {
        if (Auth::attempt([
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            'is_confirmed'=>1
        ])){
            return redirect('/');
        }
        //不光验证login可以在session中储存user_id,视图中也可以提取session中的值@if()@endif
        Session::flash('user_login_failed','密码不正确或者邮箱没验证');
        return redirect('/user/login')->withInput();
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
    public function avatar() {
        return view('users.avatar');
    }
    public function reset(Request $request) {
       $file = $request->file('avatar');
//       $input = array('image'=>$file);
//       $rules = array(
//           'image'=>'image'
//       );
//       $validator = Validator::make($input,$rules);
//       if ($validator->fails()){
//           return Response::json([
//               'success'=> false,
//               'errors' => $validator->getMessageBag()->toArray()
//           ]);
//       }
       if (!$file){
           Session::flash('image_empty','请选择一张图片');
           return redirect('/user/avatar');
       }
       if ( $file->getClientMimeType() === 'image/png' ||
           $file->getClientMimeType() === 'image/jpg' ||
           $file->getClientMimeType() === 'image/PNG' ||
           $file->getClientMimeType() === 'image/JPG'){

           $destinationPath = 'uploads/';
           $filename =Auth::user()->id.'_'.time().$file->getClientOriginalName();
           $file -> move($destinationPath,$filename);
           Image::make($destinationPath.$filename)->fit(200)->save();
           $user = User::find(Auth::user()->id);
           $user->avatar = '/'.$destinationPath.$filename;
           $user->save();
//           return Response::json([
//               'success'=> true,
//               'avatar'=> asset($destinationPath.$filename)
//           ]);

       }else{
           Session::flash('wrong_type_image','图片格式为JPG, PNG, jpg, png');
       }
        return redirect('/user/avatar');
    }
    public function pw() {
        return view('users.pw');
    }
    public function change(Request $request) {
        $password = $request->get('password');
        $confirm_password = $request->get('confirm_password');
        if ($password !== $confirm_password){
            Session::flash('not_same','两次输入的密码不一致');
            return redirect()->action('UsersController@pw');
        }
        $user = User::find(Auth::user()->id);
        $user->password = $password;
        if(!$user->save()){
            Session::flash('not_success','密码更改不成功,请重新输入');
            return redirect()->action('UsersController@pw');
        }
        return redirect()->action('UsersController@logout');

    }
}
