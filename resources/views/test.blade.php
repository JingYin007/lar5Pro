<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>完整demo</title>
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