
@extends('home.layouts.home')

@section('content')
    <!---->
    <div class="content">
        <div class="welcome">
            <div class="container">
                <div class="welcome-info">
                    <h3>Welcome</h3>
                    <h4>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h4>
                    <p>Morbi condimentum imperdiet placerat. Nullam in nisl eget turpis convallis venenatis. Cras cursus elementum justo nec bibendum. Donec quis nisi cursus, vestibulum elit eget, sagittis ligula.</p>
                </div>
            </div>
        </div>
        <!---->
        <div class="container">
            <div class="col-md-8 content-left">
                <div class="information">
                    <h4>Information</h4>
                    <div class="information_grids">
                        <div class="info">
                            <p>" Etiam ante arcu, vestibulum diam. Curabitur quis lectus. Pellentesque dictum odio velit.</p>
                            <a href="{{url('about')}}">Read more</a>
                        </div>
                        <div class="info-pic">
                            <img src="{{asset('home/images/ps.png')}}" class="img-responsive" alt=""/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="games-grids">
                    <div class="game-grid-left">
                        <div class="grid1">
                            <h5 class="act">
                                <a href="{{url('article')}}">Action</a></h5>
                            <a href="{{url('article')}}">
                                <img src="{{asset('home/images/c1.jpg')}}" class="img-responsive" alt=""/></a>
                            <div class="grid1-info">
                                <h4><a href="{{url('article')}}">Watch Dogs</a></h4>
                                <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>
                            </div>
                            <div class="more">
                                <a href="{{url('article')}}">Read more</a>
                            </div>
                        </div>
                        <div class="grid2">
                            <h5 class="race"><a href="{{url('article')}}">Racing</a></h5>
                            <a href="{{url('article')}}">
                                <img src="{{asset('home/images/c2.jpg')}}"
                                     class="img-responsive" alt=""/>
                            </a>
                            <div class="grid1-info">
                                <h4><a href="{{url('article')}}">Monster Racing</a></h4>
                                <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>
                            </div>
                            <div class="more">
                                <a href="{{url('article')}}">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="game-grid-right">
                        <div class="grid3">
                            <h5 class="sport">
                                <a href="{{url('article')}}">Sports</a></h5>
                            <a href="{{url('article')}}">
                                <img src="{{asset('home/images/c3.jpg')}}" class="img-responsive" alt=""/>
                            </a>
                            <div class="grid1-info">
                                <h4><a href="{{url('article')}}">FIFA 2015</a></h4>
                                <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>
                            </div>
                            <div class="more">
                                <a href="{{url('article')}}">Read more</a>
                            </div>
                        </div>
                        <div class="grid4">
                            <h5 class="arc"><a href="{{url('article')}}">Arcade</a></h5>
                            <a href="{{url('article')}}">
                                <img src="{{asset('home/images/c4.jpg')}}" class="img-responsive" alt=""/></a>
                            <div class="grid1-info">
                                <h4><a href="{{url('article')}}">Skylanders</a></h4>
                                <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>
                            </div>
                            <div class="more">
                                <a href="{{url('article')}}">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
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