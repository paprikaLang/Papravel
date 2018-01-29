<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet">
        <style>
            .navbar {
                margin-bottom: 0;
                padding: 2em;
            }
            .footer {
                padding: 40px 0;
                margin-top: 40px;
            }
            .navbar-default .navbar-nav > .active > a{
                color: #555;
                background-color: inherit;
            }
            .dropdown-menu > li > a{
                padding: 10px 20px;
            }
            .jumbotron{
                background: #5cb860;
                margin-bottom: 20px;
                color: #fff;
            }
            .media,.media-body{
                overflow: inherit;
                padding-top:8px;
            }
            .img-circle{
                box-shadow: rgba(255, 255, 255, 1) 0 0 0 3px, rgba(255, 255, 255, 1) 0 0 1px 3px;
            }
            .media-conversation-meta {
                float: right;
            }
            .media-conversation-replies {
                font-size: .7em;
                color: #A7B3C2;
                margin-top: 2px;
                display: block;
            }
            .media-conversation-replies a {
                font-weight: 700;
                display: block;
                text-align: center;
                color: #4B4B4B;
                font-size: 1.44em;
                line-height: 1;
                margin-bottom: -1px;
            }.media-body a{
                 color: #4b4b4b;
             }

            #avatar .avatar{
                margin: 2px auto;
                width: 100px;
                z-index: 6;
                margin-top: -28px;
                opacity:0;
                height: 32px;
            }
            #avatar .btn.avatar-button{
                margin-top: 30px;
                z-index: 3;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Papravel Dev</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li class="active"><a href="/">首页</a></li>--}}

                {{--</ul>--}}
                <ul class="nav navbar-nav navbar-right">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="dropdown">
                            <a class="dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" href="#">
                                {{\Illuminate\Support\Facades\Auth::user()->name}}<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li><a href="#"> <i class="fa fa-user"></i> 更换头像</a></li>
                                <li><a href="#"> <i class="fa fa-cog"></i> 更换密码</a></li>
                                <li><a href="#"> <i class="fa fa-heart"></i> 特别感谢</a></li>
                                <li role="separator" class="divider"></li>
                                <li> <a href="/user/logout">  <i class="fa fa-sign-out"></i> 退出登录</a></li>
                            </ul>
                        </li>
                        <li>
                           <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" class="img-circle" width="50" alt="">
                        </li>
                        {{--<li>--}}
                            {{--<a href="/user/logout">退出登录</a>--}}
                        {{--</li>--}}
                    @else
                        <li><a href="/user/login">登录</a></li>
                        <li><a href="/user/register">注册</a></li>
                    @endif

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
     @yield('content')
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
