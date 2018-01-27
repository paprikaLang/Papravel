@extends('welcome')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h3>欢迎来到 Papravel 空间
                <a class="btn btn-lg btn-primary pull-right" href="#" role="button">发布新帖 »</a>
            </h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                @foreach($discussions as $discussion)
                   <div class="media">
                   <div class="media-left">
                   <a href="#">
                       <img class="media-object img-circle" alt="64*64" src="{{$discussion->user->avatar}}" style="width: 60px;padding: 5px;">
                   </a>
                   </div>
                       <div class="media-body">
                           <h4 class="media-heading"><a href="/discussions/{{$discussion->id}}" > {{$discussion->title}}</a></h4>
                           {{$discussion->user->name}}
                       </div>
                   </div>
                @endforeach

            </div>
        </div>
    </div>
@stop
