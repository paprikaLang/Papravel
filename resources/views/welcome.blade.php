<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .navbar {
                margin-bottom: 0;
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
                <a class="navbar-brand" href="#">Papravel Dev</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">首页</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../navbar/">登录</a></li>
                    <li><a href="../navbar-fixed-top/">注册</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
     @yield('content')
    </body>
</html>
