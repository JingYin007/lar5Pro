@extends('home.layouts.home')

@section('content')
    <div class="contact">
        <div class="container">

            <div class="map div-email">
                <img class="img-email" src="{{asset('home/images/congQianMan.jpg')}}">
            </div>
            <div class="contact-form div-form-email">
                <h4>可以发送邮件哦！</h4>
                <form id="form-email">
                    {{ csrf_field() }}
                    <input type="email" id="addr" name="addr" placeholder="Email Addr" required="">
                    <input type="text" id="subject" name="subject" placeholder="Subject" required="">

                    <textarea placeholder="Content" id="content" name="content" required=""></textarea>
                    <input type="radio" name="type" checked="checked" value="text"> 纯文字 &nbsp;&nbsp;
                    <input type="radio" name="type" value="html"> 测试页面
                    <br>
                    <input type="button" class="btn-submit-email" onclick="sendEmail()" value="发送"/>
                </form>
            </div>
            <hr/>

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
                        <li><a href="#">成熟的麦子低垂着头,那是在教我们谦逊</a></li>
                        <li><a href="#">一群蚂蚁能抬走大骨头,那是在教我们团结</a></li>
                        <li><a href="#">温柔的水滴穿岩石，那是在教我们坚韧</a></li>
                        <li><a href="#">有些事，有些人，不是真的想忘记，就一定会忘记</a></li>
                        <li><a href="#">跟着你，在哪里，做什么，都好</a></li>
                        <li><a href="#">每一天，允许自己放纵一次，哭一次，只一次......其余的时间， 就开开心心地笑着过</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //contact -->
@endsection

@section('single-content')
    <script>
        //简单的检查是否填充了数据
        function checkMsg() {
            var addr = $("#addr").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            if(!addr ||!subject||!content){
                dialog.tip('请填写邮件信息！');
                return false;
            }else {
                return true;
            }
        }

        /**
         * 清空输入数据
         */
        function resetEmailForm() {
            $("#addr").val('');
            $("#subject").val('');
            $("#content").val('');
        }

        /**
         * ajax 发送邮件功能
         */
        function sendEmail() {
            var toUrl = "{{url('api/email/send')}}";
            var postData = $("#form-email").serialize();
            if (checkMsg()){
                $.post(
                    toUrl,
                    postData,
                    function (result) {
                        dialog.tip(result.message);
                        resetEmailForm();
                    },'JSON');
            }
        }
    </script>

@endsection