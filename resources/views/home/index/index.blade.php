
@extends('home.layouts.home')

@section('content')
    <!---->
    <div class="content">
        <!---->
        <div class="container">
            <div class="col-md-8 content-left">
                <div class="information">
                    <h4>一言一语</h4>
                    <div class="information_grids">
                        <div class="info">
                            <p>"谁的青春不迷茫，其实我们都一样！"</p>
                        </div>
                        <div class="info-pic">
                            <img src="{{asset('home/images/ps.jpg')}}"
                                 class="img-responsive " alt=""/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="games-grids">
                    @foreach($list as $vo)
                        <div class="game-grid-left">
                            <div class="grid1 div-index-grid">
                                <h5 class="act">
                                    <a href="{{url('article/'.$vo['id'])}}">Action</a></h5>
                                <a href="{{url('article/'.$vo['id'])}}">
                                    <img src="{{asset($vo['picture'])}}"
                                         class="img-responsive index-img-responsive" alt=""/></a>
                                <div class="grid1-info index-grid1-info div-article-view">
                                    <h4>
                                        <a href="{{url('article/'.$vo['id'])}}">{{$vo['title']}}</a>
                                    </h4>
                                    <p class="p-article-abstract">{{$vo['abstract']}}</p>
                                </div>
                                <div class="more">
                                    <a href="{{url('article/'.$vo['id'])}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-4 content-right">
                <!---->
                <div class="category blog-ctgry">
                    <h4>Top Articles</h4>
                    <div class="list-group">
                        @foreach($recommendList as $vo)
                            <a href="{{url('article/'.$vo['id'])}}" class="list-group-item a-article-recommend">
                                {{$vo['title']}}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="photo-gallery">
                    <h4>Photo Gallery</h4>
                    <div class="gallery-1 div-article-gallery">
                        @foreach($photos as $vo)
                            <div class="col-md-4 gallery-grid-pic">
                                <a class="example-image-link" href="{{asset($vo['picture'])}}" data-lightbox="example-set">
                                    <img class="example-image" src="{{asset($vo['picture'])}}" alt=""/>
                                </a>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection