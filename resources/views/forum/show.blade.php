@extends('welcome')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object img-circle"  src="{{$discussion->user->avatar}}" alt="64*64" style="width: 60px;padding: 5px;">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{$discussion->title}}
                        @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->id == $discussion->user_id)
                        <a class="btn btn-lg btn-primary pull-right" href="/discussions/{{$discussion->id}}/edit" role="button">修改帖子 »</a>
                        @endif
                            {{$discussion->user->name}}
                    </h4>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                <div class="blog-post">
                    {!! $html !!}
                </div>
            </div>
        </div>
    </div>
@stop