
@extends('home.layouts.home')

@section('content')
<div class="container">
    <div class="single">
        <div class="blog-to">

            <img class="img-responsive sin-on" src="{{asset('home/images/sin1.jpg')}}"
                 alt="" />
            <div class="blog-top">
                <div class="blog-left">
                    <b>23</b>
                    <span>July</span>
                </div>
                <div class="top-blog">
                    <a class="fast" href="#">{{$article['title']}} </a>
                    <p>Posted by
                        <a href="#">Admin</a> in
                        <a href="#">General</a> |
                        <a href="#">10 Comments</a> |
                        <span class="created_time">{{$article['created_at']}}</span>
                    </p>

                </div>

            </div>
        </div>
        <div class="blog-content">
           {{$article['content']}}
        </div>
        <div class="single-middle">
            <h3>3 Comments</h3>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{asset('home/images/co.png')}}" alt="">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="#">Richard Spark</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit .</p>
                </div>
            </div>
            <div class="media in-media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{asset('home/images/co.png')}}" alt="">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="#">Joseph Goh</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit .</p>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{asset('home/images/co.png')}}" alt="">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="#">Melinda Dee</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit .</p>
                </div>
            </div>

        </div>
        <!---->
        <div class="single-bottom">

            <h3>Leave a Comment</h3>
            <form>
                <div class="col-md-4 comment">
                    <input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
                </div>
                <div class="col-md-4 comment">
                    <input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
                </div>
                <div class="col-md-4 comment">
                    <input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
                </div>
                <div class="clearfix"> </div>
                <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>

                <input type="submit" value="Send" >

            </form>
        </div>
    </div>
</div>

@endsection