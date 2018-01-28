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
                    <h4 class="media-heading">{{$discussion->title}}</h4>  <a class="btn btn-lg btn-primary pull-right" href="#" role="button">修改帖子 »</a>
                    {{$discussion->user->name}}
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                <div class="blog-post">
                   {{$discussion->body}}
                </div>
            </div>
        </div>
    </div>
@stop