<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>你大爷的</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/young.css')}}">
    <link rel="stylesheet" href="{{asset('iconfont/iconfont.css')}}">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header class="head">
    <div class="nav-header">
        <nav class="navbar-inverse bg-info" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#example-navbar-collapse">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">你大爷的博客</a>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        @foreach ($nav_list as $nav)
                            @if (count($nav->list)==0))
                            <li><a href="#">{{$nav->name}}</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$nav->name}}<b
                                                class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach ($nav->list as  $n)
                                            <li><a href="#">{{$n->name}}</a></li>
                                            <li class="divider"></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<div class="container">
    @yield('content')
    <aside class="y-right col-lg-4 visible-lg-block">
        <div class="y-search">
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
						<button class="btn btn-default" type="button">
							搜索
						</button>
					</span>
            </div>
        </div>
        <div class="y-about">
            <h4>关于博客</h4>
            {!!$about->content !!}
        </div>

        <div class="y-new">
            <ul class="list-group">
                <h4>最新文章</h4>
                @foreach($article_new as $value)
                    <a><h4>{{str_limit($value->article_name,30,'....')}}</h4></a>
                @endforeach
            </ul>
        </div>
    </aside>
</div>
<footer>

</footer>
</body>
</html>