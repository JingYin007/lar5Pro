<!DOCTYPE HTML>
<html>
<head>
    <title>主页</title>

    <link href="{{asset('home/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('home/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('home/css/zhang.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('home/css/lightbox.css')}}">
    <!-- jQuery (necessary JavaScript plugins) -->
    <script type='text/javascript' src="{{asset('home/js/jquery-1.11.1.min.js')}}"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!-- header -->
<div class="banner">
    <div class="container">
        <div class="banner_head_top">
            <div class="logo">
                <h1>
                    <a href="{{url('/')}}">Hi~
                        <span class="glyphicon glyphicon-knight" aria-hidden="true"></span>
                        <span>moTzxx</span>
                    </a>
                </h1>
            </div>
            <div class="top-menu">
                <div class="content white">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle"
                                    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--/navbar header-->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="
                                @php
                                    echo url()->current()=='http://lar5pro.com'? 'active':'';
                                @endphp
                                        ">
                                    <a href="{{url('/')}}">首页</a>
                                </li>
                                <li class="
                                @php
                                    echo (strpos(url()->current(),'review')||strpos(url()->current(),'article'))? 'active':'';
                                @endphp
                                "><a href="{{url('review')}}">文章</a></li>
                                <li class="
                                @php
                                    echo strpos(url()->current(),'contact')? 'active':'';
                                @endphp
                                        "><a href="{{url('contact')}}">联系</a></li>
                            </ul>
                        </div>
                        <!--/navbar collapse-->
                    </nav>
                    <!--/navbar-->
                </div>
                <div class="clearfix"></div>
                <script type="text/javascript" src="{{asset('home/js/bootstrap-3.1.1.min.js')}}"></script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@yield('content')
<script src="{{asset('home/js/lightbox-plus-jquery.min.js')}}"></script>
@include('layouts.layui')
@yield('single-content')
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-6 news-ltr">
                <h4> 相遇，相识，分离，怨别</h4>
                <p>爱淡成词，瘦了纤纤素指下一阙阙相思，心若近，天涯海角都是相依；心若远，终日相聚也无法会意.</p>
                <p>月下花影，笑看世间情恨，红尘千丈，诉不尽繁花似锦。铃悬檐下，檐为铃守，铃不知； 风动铃心，铃为风歌，风不解；
                    世人谓， 无情最是如风过； 我谓，檐痴铃傻风何错！</p>
            </div>
            <div class="col-md-3 ftr-grid">
                <h3>心静</h3>
                <ul class="ftr-list">
                    <li><a href="#">有时，放弃是另一种坚持，你错失了夏花绚烂，必将会走进秋叶静美</a></li>
                    <li><a href="#">不管黑夜怎么长，白昼总会到来，生命必须有裂缝，阳光才照得进来</a></li>
                </ul>
            </div>
            <div class="col-md-3 ftr-grid">
                <h3>风语</h3>
                <ul class="ftr-list">
                    <li><a href="#">时间好比一部列车，它能承载我们驶向成功的未来；</a></li>
                    <li><a href="#">时间好比一位老人，它能帮助我们学到人生的真谛.</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="copywrite">
    <div class="container">
        <p>Copyright &copy; moTzxx 你若盛开 清风自来 心若浮沉 浅笑安然</p>
    </div>
</div>
<!---->
</body>
</html>