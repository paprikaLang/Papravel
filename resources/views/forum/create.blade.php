@extends('welcome')
@section('content')
    @include('editor::head')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-13 col-md-offset-1" role="main">
              {!! Form::open(['url'=>'/discussions']) !!}
                @include('forum.form')
                {!! Form::submit('发布帖子',['class'=>'btn btn-success pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop