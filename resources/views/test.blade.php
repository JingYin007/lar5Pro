<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>测试页面</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    @include('layouts.layui')
</head>
<body>
<ul class="layui-nav" lay-filter="">
    <li class="layui-nav-item"><a href="">最新活动</a></li>
    <li class="layui-nav-item layui-this"><a href="">产品</a></li>
    <li class="layui-nav-item"><a href="">大数据</a></li>
    <li class="layui-nav-item">
        <a href="javascript:;">解决方案</a>
        <dl class="layui-nav-child"> <!-- 二级菜单 -->
            <dd><a href="">移动模块</a></dd>
            <dd><a href="">后台模版</a></dd>
            <dd><a href="">电商平台</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item"><a href="">社区</a></li>
</ul>
<br>
<button class="layui-btn layui-btn-radius layui-btn-normal" id="btn">标准按钮</button>
<button class="layui-btn layui-btn-radius layui-btn-danger" id="btn2">警告按钮</button>


<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
            <div class="grid-demo grid-demo-bg1">移动：6/12 | 平板：6/12 | 桌面：4/12</div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
            <div class="grid-demo layui-bg-red">移动：6/12 | 平板：6/12 | 桌面：4/12</div>
        </div>
        <div class="layui-col-xs4 layui-col-sm12 layui-col-md4">
            <div class="grid-demo layui-bg-blue">移动：4/12 | 平板：12/12 | 桌面：4/12</div>
        </div>
        <div class="layui-col-xs4 layui-col-sm7 layui-col-md8">
            <div class="grid-demo layui-bg-green">移动：4/12 | 平板：7/12 | 桌面：8/12</div>
        </div>
        <div class="layui-col-xs4 layui-col-sm5 layui-col-md4">
            <div class="grid-demo layui-bg-black">移动：4/12 | 平板：5/12 | 桌面：4/12</div>
        </div>
    </div>
</div>



</body>
<script>

    $("#btn").click(function () {
        dialog.tip('怎么了？');
    });
    $("#btn2").click(function () {
        //dialog.error('Error');
        dialog.loading(2);
    });



</script>
</html>