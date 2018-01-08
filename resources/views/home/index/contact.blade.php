@extends('home.layouts.home')

@section('content')
    <div class="contact">
        <div class="container">

            <div class="about-text">
                <div class="col-md-6 about-text-left">
                    <img src="{{asset('home/images/g9.jpg')}}" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-6 about-text-right">
                    <h4>菩提本无树，明镜亦非台，本来无一物，何处惹尘埃 </h4>
                    <p>
                        如果有来生，
                        要做一棵树，
                        站成永恒，
                        没有悲欢的姿势。
                        一半在土里安详，
                        一半在风里飞扬，
                        一半洒落阴凉，
                        一半沐浴阳光，
                        非常沉默非常骄傲，
                        从不依靠 从不寻找</p>
                    <ul>
                        <li><a href="#">你是谁？</a></li>
                        <li><a href="#">爱谁谁，我管你谁是谁！</a></li>
                        <li><a href="#">我就是我，不一样的烟火~~~</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>

            <hr/>
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
                    <input type="radio" name="type" value="html"> 测试页面
                    <br>
                    <button class="btn1 btn-1 btn-1b btn-submit-email">Send</button>
                </form>
            </div>
        </div>
    </div>
    <!-- //contact -->
@endsection

@section('single-content')
    <button onclick="ce()">I</button>
    <script>
        function ce() {
            alert('??');
            dialog.tip('CESS');
        }

    </script>

@endsection