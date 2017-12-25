<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>John Donga Portfolio->Home</title>
    <link href="{{asset('home/style/style.css')}}" rel="stylesheet" type="text/css" />
    <!--slider start-->
    <link href="{{asset('home/style/quake.slider.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{asset('home/js/jquery.min.js')}}"></script>
    <script src="{{asset('home/js/quake.slider-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('home/js/template.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.quake-slider').quake({ thumbnails: false, frameWidth: 600, frameHeight: 609 });
        });
    </script>
    <!--slider end-->
</head>
<body>
<!--wrapper start-->
<div id="wrapper">
    <!--mainbody start-->
    <div id="mainbody">
        <div id="logo">
            <a href="{{url('/')}}"></a>
        </div>
        <!--navigation start-->
        <div id="navigation">
            <div class="nav">
                <ul>
                    <li><a href="{{url('/')}}"><span>Home</span></a></li>
                    <li>|</li>
                    <li><a href="{{url('about')}}"><span>About</span></a></li>
                    <li>|</li>
                    <li><a href="{{url('work')}}"><span>Work</span></a></li>
                    <li>|</li>
                    <li><a href="{{url('contact')}}" class="active"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
        <!--content start-->
        @yield('content')
        <!--content end-->
    </div>
    <!--mainbody end-->
</div>

<!--wrapper end-->
<div class="clearfix">
</div>
<!--footer start-->
<div id="footer">
    <p>
        <span><a href="#">Copyright</a> © EGrappler - 你若盛开，清风自来</span>
    </p>
    <p>
        <span>All Rights Reserved.</span></p>
    <div class="clearfix">
    </div>
</div>
<!--footer end-->
</body>
</html>
