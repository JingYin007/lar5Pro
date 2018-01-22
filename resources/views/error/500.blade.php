@extends('home.layouts.home')

@section('content')
    <div class="contact">
        <div id="box">
            <img  src="{{ asset('images/error/500.png') }}" alt="500">
            <p class="hint">非常抱歉，服务器生气罢工了，程序员哥哥正在抢修中 ...</p>
        </div>
    </div>

@endsection
@section('single-content')
    <style>
        #box{
            margin: 0 auto;
            width: 800px;
        }
        #box img{
            width:800px;
        }
        #box p{
            margin-bottom: 60px;
            width: 700px;
            height: 20px;
            text-align: center;
            line-height: 20px;
        }
        #box .hint{
            color: #999;
        }
    </style>
@endsection
