@extends('layout.layout')
@section('content')

        <article class="col-lg-8">
            @foreach ($article_list as $article)
            <section class="row box-shadow">
                <header class="title  col-sm-12 col-md-12 col-xs-12 col-lg-12">
                    <h3>{{$article->article_name}}</h3>
                </header>
                <img class="cover-img  col-sm-4 col-md-4 col-xs-12 col-lg-4" src="{{$article->cover_image}}">
                <div class="article    col-sm-8 col-md-8 col-xs-12 col-lg-8">
                    <p>
                        {{$article->text}}
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                    <ul class="y-block list-inline">
                        <li class="col-sm-3 col-md-3"><i class="icon iconfont icon-yonghu">{{$article->author_id}} </i></li>
                        <li class="col-sm-3 col-md-3"><i class="icon iconfont icon-shijian">{{date($article->create_time)}}</i></li>
                        <li class="col-sm-3 col-md-3"><i class="icon iconfont icon-chakan">{{$article->view_num}}</i></li>
                        <li class="col-sm-3 col-md-3"><i class="icon iconfont icon-chakandianzan">{{$article->like_num}}</i></li>
                    </ul>
                </div>
            </section>
            @endforeach
                {{ $article_list->links() }}
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

@stop
<footer>

</footer>
</body>
</html>