@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" role="main">
                @if(\Illuminate\Support\Facades\Session::has('not_same'))
                <div class="alert alert-danger" role="alert">
                {{\Illuminate\Support\Facades\Session::get('not_same')}}
                </div>
                @endif
                    @if(\Illuminate\Support\Facades\Session::has('not_success'))
                        <div class="alert alert-danger" role="alert">
                            {{\Illuminate\Support\Facades\Session::get('not_success')}}
                        </div>
                    @endif
                {!! Form::open(['url'=>'/password']) !!}
                <div class="form-group">
                    {!! Form::label('password','Password:') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                    <div class="form-group">
                        {!! Form::label('confirm_password','Confirm Password:') !!}
                        {!! Form::password('confirm_password',['class'=>'form-control']) !!}
                    </div>
                {!! Form::submit('确认',['class'=>'btn btn-success form-control']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
{{--@if(\Illuminate\Support\Facades\Session::has('user_login_failed'))--}}
{{--<div class="alert alert-danger" role="alert">--}}
{{--{{\Illuminate\Support\Facades\Session::get('user_login_failed')}}--}}
{{--</div>--}}
{{--@endif--}}
{{--@if(\Illuminate\Support\Facades\Session::has('email_confirmed'))--}}
{{--<div class="alert alert-success" role="alert">--}}
{{--{{\Illuminate\Support\Facades\Session::get('email_confirmed')}}--}}
{{--</div>--}}
{{--@endif--}}
{{--@if($errors->any())--}}
    {{--<ul class="list-group">--}}
        {{--@foreach($errors->all() as $error)--}}
            {{--<li class="list-group-item list-group-item-danger">{{$error}}</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
{{--@endif--}}