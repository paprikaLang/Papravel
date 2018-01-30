@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-13 col-md-offset-1" role="main">
                {!! Form::model($discussion,['method'=>'PATCH','url'=>'/discussions/'.$discussion->id]) !!}
                @include('forum.form')
                <div>
                    {!! Form::submit('更新帖子',['class'=> 'btn btn-primary pull-right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop