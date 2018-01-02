<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>导航列表</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@include('layouts.layui')
<!-- 加载公共文件  -->
    <link  href="{{asset('cms/css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="div-body-show">
@yield('body-content')
</div>

<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;
        //监听提交
        form.on('submit(formDemo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });



    /*layui.use('upload', function() {
        /!*var $ = layui.jquery
            , upload = layui.upload;*!/
        var upload = layui.upload;
        //普通图片上传
        upload.render({
            elem: '.btn_upload_img'
            , url: '/api/upload/img_file'
            , method:'get'
            , data:{id: 123, abc: 'xxx'}
            , before: function (obj) {
                //预读本地文件示例，不支持ie8
                obj.preview(function (index, file, result) {
                    $('.img-upload-view').attr('src', result); //图片链接（base64）
                });
            }
            , done: function (res) {
                //如果上传失败
                if (res.status == 0) {
                    return layer.msg('上传失败');
                }else {
                    return layer.msg('上传成功');
                }
                //上传成功
            }
        });
    });*/


    layui.use('upload', function(){
        var $ = layui.jquery
            ,upload = layui.upload;

        //普通图片上传
        var uploadInst = upload.render({
            elem: '#test1'
            ,method:'get'
            ,exts: 'zip|rar|7z|ini|jpg|png' //设置一些后缀，用于演示前端验证和后端的验证
            ,url: '/api/upload/img_file'//http://127.0.0.1:81/xxxxxxxThinkPHP/Home/index		//这里是两个版本的上传地址
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#demo1').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                //如果上传失败
                if(res.code == 500){
                    return layer.msg('上传失败，'+res.msg);
                }else{//上传成功
                    layer.msg('上传成功，'+res.data.src);
                }
            }
            ,error: function(){
                //演示失败状态，并实现重传
                var demoText = $('#demoText');
                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
                demoText.find('.demo-reload').on('click', function(){
                    uploadInst.upload();
                });
            }
        });

    });



</script>
</body>
@yield('single-content')
</html>