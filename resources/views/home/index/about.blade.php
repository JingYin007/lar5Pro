@extends('home.layouts.home')

@section('content')
    <div class="about">
        <div class="container">
            <h2>About Us</h2>
            <div class="about-text">
                <div class="col-md-6 about-text-left">
                    <img src="{{asset('home/images/g9.jpg')}}" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-6 about-text-right">
                    <h4>Suspendisse ac odio lacinia massa ornare blandit at sit amet dui.</h4>
                    <p>The point of using content here'orem Ipsum whichbut the majority have  passage of Lorem Ipsum, you need
                        anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators making this the first true generato.</p>
                    <p>Lorem Ipsum whichbut the majority have  passage of Lorem Ipsum,  All the Lorem Ipsum generators making this the first you need to be sure there isn't
                        anything embarrassing hidden in the middle of text</p>
                    <ul>
                        <li><a href="#">Donec quam andomised words.</a></li>
                        <li><a href="#">Etiam volutpa andomised words</a></li>
                        <li><a href="#">Varius fusce domised words.</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="abt-btm-grids">
                <div class="col-md-3 abt-sec span_1_of_4">
                    <div class="num-heading">
                        <div class="number">
                            <figure><span>1</span></figure>
                        </div>
                        <div class="heading">
                            <h4>Donec ultricies</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="heading-desc">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
                <div class="col-md-3 abt-sec span_1_of_4">
                    <div class="num-heading">
                        <div class="number">
                            <figure><span>2</span></figure>
                        </div>
                        <div class="heading">
                            <h4>Cras accumsan</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="heading-desc">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
                <div class="col-md-3 abt-sec span_1_of_4">
                    <div class="num-heading">
                        <div class="number">
                            <figure><span>3</span></figure>
                        </div>
                        <div class="heading">
                            <h4>Fusce rutrum</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="heading-desc">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
                <div class="col-md-3 abt-sec span_1_of_4">
                    <div class="num-heading">
                        <div class="number">
                            <figure><span>4</span></figure>
                        </div>
                        <div class="heading">
                            <h4>Integer vitae</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="heading-desc">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection