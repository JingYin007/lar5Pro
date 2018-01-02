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
    /*layui.use('form', function(){
        var form = layui.form;
        //监听提交
        form.on('submit(formDemo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });*/



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





</script>
</body>
@yield('single-content')
</html>