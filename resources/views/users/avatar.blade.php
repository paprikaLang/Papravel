@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <br>
                <div class="text-center">
                    {{--<div id="validation-errors"></div>--}}
                    <img src="{{Auth::user()->avatar}}" width="120" class="img-circle" id="user-avatar" alt="">
                    {!! Form::open(['url'=>'/avatar','files'=>true]) !!}
                    {!! Form::file('avatar') !!}
                    @if(\Illuminate\Support\Facades\Session::has('wrong_type_image'))
                        <div class="alert alert-danger" role="alert">
                            {{\Illuminate\Support\Facades\Session::get('wrong_type_image')}}
                        </div>
                    @endif
                    <div>
                        {!! Form::submit('上传头像',['class'=>'btn btn-success pull-right']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop