<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only'=>['create','store','edit','update']]);
    }

    public function index() {
        $discussions = Discussion::all();
        return view('forum.index',compact('discussions'));
    }

    public function create() {
        return view('forum.create');
    }
    public function store(PostStoreRequest $request)
    {
        $data = [
            'user_id'=>Auth::user()->id,
            'last_user_id'=>Auth::user()->id
        ];
        $discussion = Discussion::create(array_merge($request->all(),$data));
        return redirect()->action('PostsController@show',['id'=>$discussion->id]);
    }
    public function show($id) {
        $discussion = Discussion::findOrFail($id);
        return view('forum.show',compact('discussion'));
    }
}
