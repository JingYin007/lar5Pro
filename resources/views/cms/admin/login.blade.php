<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>moTzxx - CMS</title>
    <!-- load layui -->
@include('layouts.layui')
<!-- 加载公共文件  -->
    <link  href="{{asset('cms/css/zhang.css')}}" rel="stylesheet">
    <script type='text/javascript' src="{{asset('cms/js/moZhang.js')}}" ></script>

</head>
<body>
<form class="layui-form layui-form-pane"  id="form-login">
    <div class="layui-form-item">
        <label class="layui-form-label">输入框</label>
        <div class="layui-input-inline">
            <input type="text" name="user_name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码框</label>
        <div class="layui-input-inline">
            <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
        </div>
    </div>
    <input type="hidden" name="_token" class="tag_token" value="<?php echo csrf_token(); ?>">
    <div class="layui-form-item">
        <div class="layui-input-block div-form-op">
            <button class="layui-btn" type="button" onclick="adminLogin()"
                    lay-submit lay-filter="formDemo">添加</button>
            <button type="reset"  class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
</body>
<script>
    function adminLogin() {
        var toUrl = "{{url('cms/login/ajaxLogin')}}";
        var postData = $("#form-login").serialize();
        var indexUrl = "{{url('cms/index')}}";
        $.post(
            toUrl,
            postData,
            function (result) {
                if(result.status == 1){
                    window.location.href = indexUrl;
                }else{
                    //失败
                    layer.msg(result.message);
                }
            },"JSON");
    }
</script>
</html>