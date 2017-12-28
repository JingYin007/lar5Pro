@extends('home.layouts.home')

@section('content')
    <div class="contact">
        <div class="container">
            <div class="map div-email">
                <img class="img-email" src="{{asset('images/email.jpg')}}">
            </div>
            <div class="contact-form div-form-email">
                <h4>Please Email To Me</h4>
                <form id="form-email" method="post" action="{{url('api/email/send')}}">
                    {{ csrf_field() }}
                    <input type="email" name="addr" placeholder="Email Addr" required="">
                    <input type="text" name="subject" placeholder="Subject" required="">

                    <textarea placeholder="Content" name="content" required=""></textarea>
                    <input type="radio" name="type" checked="checked" value="text"> 纯文字 &nbsp;&nbsp;
                    <input type="radio" name="type" value="html"> 当前页面
                    <br>
                    <button class="btn1 btn-1 btn-1b btn-submit-email">Send</button>
                </form>
            </div>
        </div>
    </div>
    <!-- //contact -->

@endsection