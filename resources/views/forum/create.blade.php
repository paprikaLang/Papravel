@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
        <br>
        <div class="col-md-7 col-md-offset-3" role="main">
            {!! Form::open(['url'=>'/discussions']) !!}
            @include('forum.form')
            <div>
                {!! Form::submit('发布帖子',['class'=> 'btn btn-primary pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop