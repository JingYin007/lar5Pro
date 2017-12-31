<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>moTzxx-CMS</title>
    <meta name="keywords" content="moTzxx-CMS" />
    <meta name="description" content="moTzxx-CMS Version:1.0" />
    <meta name="Author" content="moTzxx" />

    <!-- load layui -->
@include('layouts.layui')
<!-- 加载公共文件  -->
    <link  href="{{asset('cms/css/style.css')}}" rel="stylesheet">
    <script type='text/javascript' src="{{asset('cms/js/moZhang.js')}}" ></script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">

    <div class="layui-header">
        <div class="layui-logo">moTzxx 后台布局</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left ">
            <li class="layui-nav-item " >
                <span class="menu-switch open"></span>
            </li>
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item">
                <a href="">消息<span class="layui-badge">9</span></a>
            </li>

            <li class="layui-nav-item" ><a href="">商品管理</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>

        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item" >
                <a href="#" id="FullScreen">
                    <img class="img-FullScreen" src="{{asset('cms/images/fullscreen.png')}}">
                    <span>全屏</span></a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="{{asset('cms/images/user.jpg')}}" class="layui-nav-img">
                    moTzxx
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">消息<span class="layui-badge">9</span></a></dd>

                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>





    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <div class="user-info">
                <div class="photo-view">
                    <img src="{{asset('cms/images/user.jpg')}}">
                </div>
                <p>moTzxx 您好，欢迎登录！</p>
            </div>
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->

            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">所有商品</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">列表一</a></dd>
                        <dd><a href="javascript:;">列表二</a></dd>
                        <dd><a href="javascript:;">列表三</a></dd>
                        <dd><a href="">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">解决方案</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">列表一</a></dd>
                        <dd><a href="javascript:;">列表二</a></dd>
                        <dd><a href="">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">云市场</a></li>
                <li class="layui-nav-item"><a href="">发布商品</a></li>
            </ul>
        </div>
    </div>
    <div class="layui-body">
        <ul class="layui-tab-title">
            <li class="layui-this title-selected">
                <i class="layui-icon">&#xe68e;</i>
                主页
            </li>
            <li class="layui-this" url="{{url('test')}}">
                <span>动态管理</span>
                <i class="layui-icon  layui-tab-close">ဆ</i>
            </li>
            <li class="layui-this" url="{{url('about')}}">
                <span>权限分配</span>
                <i class="layui-icon  layui-tab-close">ဆ</i>
            </li>
        </ul>
        <!-- 内容主体区域 -->

            {{--@include('home.index.about')--}}
            <iframe class="iframe-body"
                    src="{{url('contact')}}">
            </iframe>

    </div>
</div>
</body>
<script>

</script>
</html>