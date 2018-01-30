@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <br>
                {{--<div class="text-center">--}}
                    {{--<div id="validation-errors"></div>--}}
                    {{--<img src="{{Auth::user()->avatar}}" width="120" class="img-circle" id="user-avatar" alt="">--}}
                    {{--{!! Form::open(['url'=>'/avatar','files'=>true,'id'=>'avatar']) !!}--}}
                    {{--<div class="text-center">--}}
                        {{--<button type="button" class="btn btn-success avatar-button" id="upload-avatar">上传新的头像</button>--}}
                    {{--</div>--}}
                    {{--{!! Form::file('avatar',['class'=>'avatar','id'=>'image']) !!}--}}
                    {{--{!! Form::close() !!}--}}
                    {{--<div class="span5">--}}
                        {{--<div id="output" style="display:none">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="text-center">
                    <div id="validation-errors"></div>
                    <img src="{{Auth::user()->avatar}}" width="120" class="img-circle" id="user-avatar" alt="">
                    {!! Form::open(['url'=>'/avatar','files'=>true]) !!}
                    {!! Form::file('avatar') !!}
                    @if(\Illuminate\Support\Facades\Session::has('wrong_type_image'))
                        <div class="alert alert-danger" role="alert">
                            {{\Illuminate\Support\Facades\Session::get('wrong_type_image')}}
                        </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Session::has('image_empty'))
                        <div class="alert alert-danger" role="alert">
                            {{\Illuminate\Support\Facades\Session::get('image_empty')}}
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
    {{--<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>--}}
    {{--<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<script src="/js/jquery.form.js"></script>--}}

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>--}}

    {{--<script>--}}
        {{--$(document).ready(function() {--}}
            {{--var options = {--}}
                {{--beforeSubmit:  showRequest,--}}
                {{--success:       showResponse,--}}
                {{--dataType: 'json'--}}
            {{--};--}}
            {{--$('#image').on('change', function(){--}}
                {{--$('#upload-avatar').html('正在上传...');--}}
                {{--var avatar = $('#avatar').ajaxSubmit(options);--}}
                {{--$('form').ajaxForm({--}}
                    {{--delegation: true--}}
                {{--});--}}
{{--//                $('#avatar').ajaxForm(options).submit();--}}
            {{--});--}}
        {{--});--}}
        {{--function showRequest() {--}}
            {{--$("#validation-errors").hide().empty();--}}
            {{--$("#output").css('display','none');--}}
            {{--return true;--}}
        {{--}--}}

        {{--function showResponse(response)  {--}}
            {{--if(response.success === false)--}}
            {{--{--}}
                {{--var responseErrors = response.errors;--}}
                {{--$.each(responseErrors, function(index, value)--}}
                {{--{--}}
                    {{--if (value.length !== 0)--}}
                    {{--{--}}
                        {{--$("#validation-errors").append('<div class="alert alert-error"><strong>'+ value +'</strong><div>');--}}
                    {{--}--}}
                {{--});--}}
                {{--$("#validation-errors").show();--}}
            {{--} else {--}}
                {{--$('#user-avatar').attr('src',response.avatar);--}}
                {{--$('#upload-avatar').html('更换新的头像');--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}

@stop