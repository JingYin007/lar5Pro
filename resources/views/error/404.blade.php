@extends('home.layouts.home')

@section('content')
    <div class="contact">
        <div id="box">
            <img src="{{ asset('images/error/404.jpg') }}" alt="404">
            <p>将在 <span id="mes">5</span> 秒钟后返回 <a href="{{ url('/') }}">首页</a></p>
            <p class="hint">非常抱歉 - 您可能输入了错误的网址，或者该网页已删除或移动</p>
        </div>
    </div>

@endsection

@section('single-content')
    <style>
        #box{
            margin: 0 auto;
            width: 540px;
            height: 540px;
        }
        #box p{
            margin-bottom: 60px;
            width: 540px;
            height: 20px;
            text-align: center;
            line-height: 20px;
        }
        #mes{
            font-size: 30px;
            color: red;
        }
        #box .hint{
            color: #999;
        }
        #box a{
            color: #259AEA;
            text-decoration:none
        }
    </style>
    <script>
        var i = 5;
        var intervalID = setInterval("fun()", 1000);
        function fun() {
            if (i == 0) {
                window.location.href = "/";
                clearInterval(intervalID);
            }
            document.getElementById("mes").innerHTML = i;
            i--;
        }
    </script>
@endsection