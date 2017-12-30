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
    <!-- Custom Theme files -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
    <!-- Custom Theme files -->
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Game Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
                                    echo strpos(url()->current(),'about')? 'active':'';
                                @endphp
                                        "><a href="{{url('about')}}">简介</a></li>
                                <li class="
                                @php
                                    echo (strpos(url()->current(),'review')||strpos(url()->current(),'article'))? 'active':'';
                                @endphp
                                "><a href="{{url('review')}}">文章</a></li>
                                <li class="
                                @php
                                    echo strpos(url()->current(),'gallery')? 'active':'';
                                @endphp
                                        "><a href="{{url('gallery')}}">精图</a></li>
                                <li class="
                                @php
                                    echo strpos(url()->current(),'shortcodes')? 'active':'';
                                @endphp
                                        "><a href="{{url('shortcodes')}}">图标</a></li>
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

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-6 news-ltr">
                <h4>Newsletter</h4>
                <p>Aenean sagittis est eget elit pulvinar cursus. Lorem ipsum consectetur adipiscing elit. Phasellus non purus at risus consequat finibus.</p>
                <form>
                    <input type="text" class="text" value="Enter Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter Email';}">
                    <input type="submit" value="Subscribe">
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-md-3 ftr-grid">
                <h3>Categories</h3>
                <ul class="ftr-list">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Racing</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Simulation</a></li>
                    <li><a href="#">Bike</a></li>
                </ul>
            </div>
            <div class="col-md-3 ftr-grid">
                <h3>Platform</h3>
                <ul class="ftr-list">
                    <li><a href="#">Pc</a></li>
                    <li><a href="#">Ps4</a></li>
                    <li><a href="#">XBOX 360</a></li>
                    <li><a href="#">XBOX ONE</a></li>
                    <li><a href="#">PSP</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="copywrite">
    <div class="container">
        <p>Copyright &copy; moTzxx 你若盛开 清风自来</p>
    </div>
</div>
<!---->
</body>
</html>