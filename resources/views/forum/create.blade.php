@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
        <br>
        <div class="col-md-7 col-md-offset-3" role="main">
            {!! Form::open(['url'=>'/discussions']) !!}
            <div class="form-group">
                {!! Form::label('title','Title:') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body','Body:') !!}
                {!! Form::textarea('body',null,['class'=>'form-control']) !!}
            </div>
            <div>
                {!! Form::submit('发布帖子',['class'=> 'btn btn-primary pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop