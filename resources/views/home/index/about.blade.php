@extends('home.layouts.home')

@section('content')
    <div class="main">
        <!--about_page start-->
        <div class="about_page">
            <!--about_items start-->
            <div class="about_items">
                <div class="grey_bar">
                    <!--breadcrumbs start-->
                    <div id="breadcrumbs">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>» </li>
                            <li>About</li>
                        </ul>
                    </div>
                    <!--breadcrumbs end-->
                    <h2>
                        About
                    </h2>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet mattis
                    lorem non ultricies. Nullam sed leo orci, tincidunt sodales nibh. Nulla pellentesque
                    nisi vitae massa commodo tincidunt. Aliquet mattis lorem Cras nunc mi, facilisis
                    nec malesuada eu, egestas eu libero.<br />
                </p>
                <br />
                <h2>
                    Aliquet mattis lorem</h2>
                <br />
                <p>
                    Cras nunc mi, facilisis nec malesuada eu, egestas eu libero. Sed semper suscipit
                    nulla. Cras sed eros at urna aliquet pharetra id ut augue. Curabitur tincidunt vulputate
                    ultricies. Donec vehicula sodales suscipit. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Aenean lectus tellus, consectetur auctor porttitor pulvinar, sollicitudin
                    vel nisi. Vivamus congue iaculis est nec condimentum. Suspendisse velit risus, euismod
                    vel blandit id, laoreet a quam. Etiam magna sapien, rutrum sit amet lacinia et,
                    lacinia ut tellus. Maecenas et mauris mauris. Quisque non massa libero, sed vestibulum
                    arcu. Nam in odio quis lorem semper commodo in a odio. Aenean id nibh ac nisl tincidunt
                    convallis at ac turpis.</p>
                <br />
                <h2>
                    Fermentum ac ipsum</h2>
                <br />
                <p>
                    Cras odio sem, aliquam ac vestibulum eu, fermentum ac ipsum. Nunc ultrices ultricies
                    egestas. Suspendisse posuere, dolor in egestas venenatis, magna metus auctor ligula,
                    ac porttitor tortor felis eget nisl. Quisque lectus est, commodo eget commodo sit
                    amet, rutrum a diam. Suspendisse elit nibh, lacinia a pretium ac, scelerisque aliquam
                    odio. Morbi et auctor massa. Mauris faucibus ullamcorper elementum. Curabitur non
                    mollis purus. Sed vel dolor a purus facilisis vehicula. Pellentesque blandit, diam
                    venenatis tincidunt consequat, turpis augue convallis nulla, a congue quam mauris
                    eget orci. Mauris ac lobortis nibh. Curabitur justo tortor, faucibus in iaculis
                    id, cursus quis enim.
                </p>
                <br />
            </div>
            <!--about_items end-->
            <!--Skills_items end-->
            <div class="Skills_items">
                <!--block start-->
                <div class="block">
                    <h3>
                        Skills widget</h3>
                    <br />
                    <p>
                        The skills widget below is so easy to use. Simply enter some skills and a number
                        for your rating and the rest will be done for you!</p>
                </div>
                <!--block end-->
                <div class="clearfix">
                </div>
                <br />
                <!--block start-->
                <div class="block">
                    <h3>
                        My Skills</h3>
                    <!--Skills_widget_items start-->
                    <div class="Skills_widget_items">
                        <!--Skills_widget_title start-->
                        <div class="Skills_widget_title">
                            Photoshop
                        </div>
                        <!--Skills_widget_title end-->
                        <!--Skills_widget_stars start-->
                        <div class="Skills_widget_stars">
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                        </div>
                        <!--Skills_widget_stars end-->
                    </div>
                    <!--Skills_widget_items end-->
                    <div class="clearfix">
                    </div>
                    <!--Skills_widget_items start-->
                    <div class="Skills_widget_items">
                        <!--Skills_widget_title start-->
                        <div class="Skills_widget_title">
                            Illustrator
                        </div>
                        <!--Skills_widget_title end-->
                        <!--Skills_widget_stars start-->
                        <div class="Skills_widget_stars">
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                        </div>
                        <!--Skills_widget_stars end-->
                    </div>
                    <!--Skills_widget_items end-->
                    <div class="clearfix">
                    </div>
                    <!--Skills_widget_items start-->
                    <div class="Skills_widget_items">
                        <!--Skills_widget_title start-->
                        <div class="Skills_widget_title">
                            Query
                        </div>
                        <!--Skills_widget_title end-->
                        <!--Skills_widget_stars start-->
                        <div class="Skills_widget_stars">
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                        </div>
                        <!--Skills_widget_stars end-->
                    </div>
                    <!--Skills_widget_items end-->
                    <div class="clearfix">
                    </div>
                    <!--Skills_widget_items start-->
                    <div class="Skills_widget_items">
                        <!--Skills_widget_title start-->
                        <div class="Skills_widget_title">
                            CSS
                        </div>
                        <!--Skills_widget_title end-->
                        <!--Skills_widget_stars start-->
                        <div class="Skills_widget_stars">
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                        </div>
                        <!--Skills_widget_stars end-->
                    </div>
                    <!--Skills_widget_items end-->
                    <div class="clearfix">
                    </div>
                    <!--Skills_widget_items start-->
                    <div class="Skills_widget_items">
                        <!--Skills_widget_title start-->
                        <div class="Skills_widget_title">
                            Wordpress
                        </div>
                        <!--Skills_widget_title end-->
                        <!--Skills_widget_stars start-->
                        <div class="Skills_widget_stars">
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                            <img class="widget_stars" src="{{asset('home/images/star.png')}}" width="16" height="16" alt="" />
                        </div>
                        <!--Skills_widget_stars end-->
                    </div>
                    <!--Skills_widget_items end-->
                </div>
                <!--block end-->
            </div>
            <!--Skills_items end-->
        </div>
        <!--about_page end-->

    </div>

@endsection