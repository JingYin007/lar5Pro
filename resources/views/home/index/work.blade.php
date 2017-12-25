@extends('home.layouts.home')

@section('content')
    @include('home.layouts.work-js')
    <div class="main">

        <!--work_items start-->
        <div class="work_items">
            <div class="grey_bar">
                <!--breadcrumbs start-->
                <div id="breadcrumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>» </li>
                        <li>Work</li>
                    </ul>
                </div>
                <!--breadcrumbs end-->
                <h2>
                    Work
                </h2>
            </div>
            <div class="clearfix">
            </div>
            <!--work_gallery start-->
            <div id="work_gallery">
                <!--pro_items start-->
                <div class="pro_items">
                    <a rel="example_group" class="gallery-box" href="{{asset('home/jquery.fancybox-1.3.4/example/work_itmes_img01_b.png')}}"
                       title="Lorem ipsum dolor sit amet">
                        <img alt="" src="{{asset('home/jquery.fancybox-1.3.4/example/work_itmes_img01_s.png')}}" /></a>
                    <a rel="example_group" class="gallery-box" href="{{asset('home/jquery.fancybox-1.3.4/example/work_itmes_img02_s.png')}}"
                       title="Lorem ipsum dolor sit amet">
                        <img alt="" src="{{asset('home/jquery.fancybox-1.3.4/example/work_itmes_img02_s.png')}}" /></a>
                    <a rel="example_group" class="gallery-box nomargingright" href="{{asset('home/jquery.fancybox-1.3.4/example/work_itmes_img03_s.png')}}"
                       title="Lorem ipsum dolor sit amet">
                        <img alt="" src="{{asset('home/jquery.fancybox-1.3.4/example/work_itmes_img03_s.png')}}" /></a>
                </div>
                <!--pro_items end-->
                <div class="clearfix">
                </div>
                <!--pro_items start-->
                <!--pro_items end-->
                <!--pro_items start-->
                <!--pro_items end-->
                <!--pro_items start-->
                <!--pro_items end-->
            </div>
            <!--work_gallery end-->
        </div>
        <!--work_items end-->

    </div>

@endsection

