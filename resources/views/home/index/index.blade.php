
@extends('home.layouts.home')

@section('content')
    <div id="content">
        <!--leftsidebar start-->
        <div id="leftsidebar">
            <!--main_tittle start-->
            <div class="main_tittle">
                <h3>
                    Hi, My Name is John Donga
                </h3>
            </div>
            <!--main_tittle start-->
            <div class="clearfix">
            </div>
            <!--main_desc start-->
            <div class="main_desc">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam placerat rutrum lacus
                    sit amet ultrices. Nunc suscipit cursus urna, et adipiscing nisl placerat ac. Fusce
                    nulla libero. Donec semper diam quis
                    erat posuere eget scelerisque lorem placerat…
                </p>
            </div>
            <!--main_desc end-->
            <div class="clearfix">
            </div>
            <!--update start-->
            <div class="update">
                <h2>
                    Recent Updates</h2>
                <br />
                <ul>
                    <li>
                        <a href="http://www.egrappler.com/jquery-image-content-slider-plugin-quake-slider/">
                            jQuery Image/Content Slider Plugin: Quake Slider</a>
                    </li>
                    <li>
                        <a href="http://www.egrappler.com/free-premium-html-adminbackend-template-for-web-applications-bluewhale-admin/">
                            Free Professional Admin Template</a>
                    </li>
                    <li>
                        <a href="http://www.greepit.com/2010/06/creative-resume-template/">Creative Resume
                            Template</a></li>
                    <li>
                        <a href="{{url('home/index')}}">
                            30 Free PSD Files</a>
                    </li>
                    <li>
                        <a href="http://www.egrappler.com/free-premium-website-template-clean-business/">
                            Free Premium Website Template</a>
                    </li>
                </ul>
            </div>
            <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" title="模板之家">模板之家</a></div>
            <!--update end-->
            <div class="clearfix">
            </div>
            <!--about start-->
            <div class="about">
                <h2>
                    About this site</h2>
                <br />
                <p>
                    Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                    <a href="http://www.egrappler.com">EGrappler.com</a> Lorem ipsum dolor sit amet.
                    Lorem ipsum <a href="#">EGrappler</a> Lorem ipsum dolor sit amet.</p>
            </div>
            <!--about end-->
        </div>
        <!--leftsidebar end-->
        <!--sidebar start-->
        <div id="sidebar">
            <div id="slider-wrapper">
                <div class="quake-slider">
                    <div class="quake-slider-images">
                        <img src="{{asset('home/images/slider01.jpg')}}" alt="" />
                        <img src="{{asset('home/images/slider02.jpg')}}" alt="" />
                        <img src="{{asset('home/images/slider03.jpg')}}" alt="" />
                        <img src="{{asset('home/images/slider04.jpg')}}" alt="" />
                    </div>
                    <div class="quake-slider-captions">
                    </div>
                </div>
                {{--<div id="slider" class="nivoSlider">
                    <img src="{{asset('home/images/slider01.jpg')}}" alt="" />
                    <img src="{{asset('home/images/slider02.jpg')}}" alt="" />
                    <img src="{{asset('home/images/slider03.jpg')}}" alt="" />
                    <img src="{{asset('home/images/slider04.jpg')}}" alt="" />
                </div>--}}
            </div>
        </div>
        <!--sidebar end-->
    </div>
@endsection