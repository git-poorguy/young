<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>你大爷的</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/young.css')}}">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header class="head">
    <div class="nav-header">
        <nav class="navbar-inverse bg-info" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">你大爷的博客</a>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Linux</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">WEB<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">CSS3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">HTML5</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<div class="container">
    <article class="col-lg-8">
        <section class="row box-shadow">
            <header class="title  col-sm-12 col-md-12 col-xs-12 col-lg-12">
                <h3>等下我就一键盘</h3>
            </header>
            <img class="cover-img  col-sm-4 col-md-4 col-xs-12 col-lg-4" src="{{asset('img/img.png')}}">
            <div class="article    col-sm-8 col-md-8 col-xs-12 col-lg-8">
                <p>
                    搜索基本上是网站或者 app 必备的功能了；可是同样是搜索；实现起来也都能是尼古拉斯凯奇和尼古拉斯赵四间的差距；一般的搜索是 sql 模糊查询级别的；比如说文章中有 php是世界上最好的语言
                    这句话;如果我们用 sql 的 like 的 % 模糊查询的话；搜索词必须要连贯切一字不差；可以搜 `like 'php是%'` 也可以搜 `like '%最好的语言'` 或者 `...
                </p>
            </div>
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                <ul class="list-inline">
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                </ul>
            </div>
        </section>
        <div class="y-pag">
            <div class="row text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </article>
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
            <p>纯属闹着玩的</br>哈哈哈哈哈哈哈</br>咳咳咳</br>不管了继续笑</br>哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</p>
        </div>

        <div class="y-new">
            <ul class="list-group">
                <h4>最新文章</h4>
                <a><h4>开源项目系列之laravel-print以简洁</h4></a>
                <a><h4>开源项目系列之laravel-print以简洁</h4></a>
                <a><h4>开源项目系列之laravel-print以简洁</h4></a>
                <a><h4>开源项目系列之laravel-print以简洁</h4></a>
                <a><h4>开源项目系列之laravel-print以简洁</h4></a>
                <a><h4>开源项目系列之laravel-print以简洁</h4></a>
                <a><h4>开源项目系列之laravel-print以简洁</h4></a>
            </ul>
        </div>
    </aside>
</div>
<footer>

</footer>
</body>
</html>