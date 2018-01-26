@extends('welcome')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello World
                <a class="btn btn-lg btn-primary pull-right" href="#" role="button">Learn more »</a>
            </h1>
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
                           <h4 class="media-heading">
                               {{$discussion->title}}
                           </h4>
                           {{$discussion->user->name}}
                       </div>
                   </div>
                @endforeach

            </div>
        </div>
    </div>
@stop
