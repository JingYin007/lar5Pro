
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
                            <div class="grid1-info index-grid1-info">
                                <h4>
                                    <a href="{{url('article/'.$vo['id'])}}">{{$vo['title']}}</a>
                                </h4>
                                <p>{{$vo['abstract']}}</p>
                            </div>
                            <div class="more">
                                <a href="{{url('article/'.$vo['id'])}}">Read more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
            <div class="col-md-4 content-right">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav2" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Trending</a>
                    </li>
                    <li role="presentation" >
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                            Recent Posts</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active re-pad2" id="home">
                        <div class="game1">
                            <div class="col-md-3 tab-pic">
                                <a href="{{url('article')}}">
                                    <img src="{{asset('home/images/tr1.jpg')}}" alt="/" class="img-responsive"></a>
                            </div>
                            <div class="col-md-9 tab-pic-info">
                                <h4><a href="{{url('article')}}">Angry Birds</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="game1">
                            <div class="col-md-3 tab-pic">
                                <a href="{{url('article')}}">
                                    <img src="{{asset('home/images/tr3.jpg')}}" alt="/" class="img-responsive"></a>
                            </div>
                            <div class="col-md-9 tab-pic-info">
                                <h4><a href="{{url('article')}}">Vice City GTA</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="game1">
                            <div class="col-md-3 tab-pic">
                                <a href="{{url('article')}}">
                                    <img src="{{asset('home/images/tr2.jpg')}}" alt="/" class="img-responsive"></a>
                            </div>
                            <div class="col-md-9 tab-pic-info">
                                <h4><a href="{{url('article')}}">Call Of Duty</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane re-pad2" id="profile">
                        <div class="game-post">
                            <div class="col-md-3 tab-pic">
                                <a href="{{url('article')}}">
                                    <img src="{{asset('home/images/tr4.jpg')}}" alt="/" class="img-responsive"></a>
                            </div>
                            <div class="col-md-9 tab-post-info">
                                <h4><a href="{{url('article')}}">IronMan</a></h4>
                                <p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="game-post">
                            <div class="col-md-3 tab-pic">
                                <a href="{{url('article')}}">
                                    <img src="{{asset('home/images/tr5.jpg')}}" alt="/" class="img-responsive"></a>
                            </div>
                            <div class="col-md-9 tab-post-info">
                                <h4><a href="{{url('article')}}">God Of War</a></h4>
                                <p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="game-post">
                            <div class="col-md-3 tab-pic">
                                <a href="{{url('article')}}">
                                    <img src="{{asset('home/images/tr6.jpg')}}" alt="/" class="img-responsive"></a>
                            </div>
                            <div class="col-md-9 tab-post-info">
                                <h4><a href="{{url('article')}}">Need For Speed</a></h4>
                                <p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="category blog-ctgry">
                    <h4>Top Games</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Cras justo odio</a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                        <a href="#" class="list-group-item">Quisque elementum </a>
                        <a href="#" class="list-group-item">Vestibulum eleifend</a>
                        <a href="#" class="list-group-item">Donec sit amet justo </a>
                    </div>
                </div>
                <div class="photo-gallery">
                    <h4>Photo Gallery</h4>
                    <div class="gallery-1">
                        <div class="col-md-4 gallery-grid-pic">
                            <a class="example-image-link" href="{{asset('home/images/p2.jpg')}}" data-lightbox="example-set">
                                <img class="example-image" src="{{asset('home/images/p2.jpg')}}" alt=""/></a>
                        </div>
                        <div class="col-md-4 gallery-grid-pic">
                            <a class="example-image-link" href="{{asset('home/images/p1.jpg')}}" data-lightbox="example-set">
                                <img class="example-image" src="{{asset('home/images/p1.jpg')}}" alt=""/></a>
                        </div>
                        <div class="col-md-4 gallery-grid-pic">
                            <a class="example-image-link" href="{{asset('home/images/p3.jpg')}}" data-lightbox="example-set">
                                <img class="example-image" src="{{asset('home/images/p3.jpg')}}" alt=""/></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="gallery-1">
                        <div class="col-md-4 gallery-grid-pic">
                            <a class="example-image-link" href="{{asset('home/images/p1.jpg')}}"
                               data-lightbox="example-set">
                                <img class="example-image" src="{{asset('home/images/p1.jpg')}}" alt=""/>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-grid-pic">
                            <a class="example-image-link" href="{{asset('home/images/p3.jpg')}}"
                               data-lightbox="example-set">
                                <img class="example-image" src="{{asset('home/images/p3.jpg')}}" alt=""/>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-grid-pic">
                            <a class="example-image-link" href="{{asset('home/images/p4.jpg')}}"
                               data-lightbox="example-set">
                                <img class="example-image" src="{{asset('home/images/p4.jpg')}}" alt=""/>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection