@extends('welcome')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="media">
                <div class="media-left">
                    <a>
                        <img class="media-object img-circle" alt="64x64" src="{{$discussion->user->avatar}}" style="width: 60px;padding: 5px;">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{$discussion->title}}
                        @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->id == $discussion->user_id)
                        <a class="btn btn-lg btn-danger pull-right" href="/discussions/{{$discussion->id}}/edit" role="button">修改帖子 »</a>
                        @endif
                    </h4>
                    {{$discussion->user->name}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                <div class="blog-post">
                    {!! $html !!}
                </div>
                <hr>
                <br>
                @foreach($discussion->comments as $comment)
                    <div class="media">
                        <div class="media-left">
                            <a>
                                <img class="media-object img-circle" alt="64x64" src="{{$comment->user->avatar}}" style="width:40px;padding: 2px">
                            </a>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">{{$comment->user->name}} :</h5>
                            {{$comment->body}}
                        </div>
                    </div>
                @endforeach
                <hr>
                @if(\Illuminate\Support\Facades\Auth::check())
                {!! Form::open(['url'=>'/comments']) !!}
                {!! Form::hidden('discussion_id',$discussion->id) !!}
                <div class="form-group">
                    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                </div>
                <div>
                    {!! Form::submit('发表评论',['class'=>'btn btn-success pull-right']) !!}
                </div>
                {!! Form::close() !!}
                @else
                    <a href="/user/login" class="btn btn-block btn-success">登录参与评论</a>
                @endif
            </div>
        </div>
    </div>
@stop
{{--{!! Form::open(['url'=>'comments']) !!}--}}
{{--{!! Form::hidden('discussion_id',$discussion->id) !!}--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('body',\Illuminate\Support\Facades\Auth::user()->name) !!}--}}
    {{--{!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'您的想法']) !!}--}}
{{--</div>--}}
{{--<div>--}}
    {{--{!! Form::submit('发表评论',['class'=>'btn btn-success pull-right']) !!}--}}
{{--</div>--}}
{{--{!! Form::close() !!}--}}

{{--<form action="{{ url('/comments') }}" method="POST">--}}
    {{--{!! csrf_field() !!}--}}
    {{--<input type="hidden" name="discussion_id" value="{{ $discussion->id }}">--}}
    {{--<div class="form-group">--}}
        {{--<label>{{\Illuminate\Support\Facades\Auth::user()->name}}</label>--}}
        {{--<textarea name="content" class="form-control" placeholder="您的观点" rows="3" required="required"></textarea>--}}
    {{--</div>--}}
    {{--<button type="submit" class="btn btn-lg btn-success col-lg-12 pull-right">Submit</button>--}}
{{--</form>--}}