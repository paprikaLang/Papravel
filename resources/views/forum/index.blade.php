@extends('welcome')
@section('content')
    <div class="jumbotron">
        <div class="container">
            @if(\Illuminate\Support\Facades\Session::has('confirm_email'))
                <div class="alert alert-danger" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('confirm_email')}}
                </div>
            @endif
            <h3>欢迎来到 Papravel 空间
                <a class="btn btn-lg btn-danger pull-right" href="/discussions/create" role="button">发布新帖 »</a>
            </h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                @foreach($discussions as $discussion)
                   <div class="media">
                   <div class="media-left">
                   <a>
                       <img class="media-object img-circle" alt="64*64" src="{{$discussion->user->avatar}}" style="width: 60px;padding: 5px;">
                   </a>
                   </div>
                       <div class="media-body">
                           <h4 class="media-heading">
                               <a href="/discussions/{{$discussion->id}}">{{$discussion->title}}</a>
                               <div class="media-conversation-meta">
                                   <span class="media-conversation-replies">
                                       <a href="/discussions/{{$discussion->id}}">{{count($discussion->comments)}}</a>
                                       回复
                                   </span>
                               </div>
                           </h4>
                           {{$discussion->user->name}}
                       </div>
                   </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
