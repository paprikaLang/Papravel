@extends('welcome')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object img-circle" alt="64x64" src="{{$discussion->user->avatar}}" style="width: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{$discussion->title}}</h4>
                    {{$discussion->user->name}}
                </div>
            </div>
                <a class="btn btn-lg btn-primary pull-right" href="#" role="button">修改帖子 »</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
            </div>
        </div>
    </div>
@stop