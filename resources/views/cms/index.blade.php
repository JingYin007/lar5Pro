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
        <div class="layui-logo"><span>moTzxx 后台管理</span></div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left ">
            <li class="layui-nav-item " >
                <span class="menu-switch open"></span>
            </li>
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item">
                <a href="">消息<span class="layui-badge">9</span></a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>

            <li class="layui-nav-item">
                <!-- 天气信息 -->
                <div class="weather" pc>
                    <div id="tp-weather-widget"></div>
                    <script>(function(T,h,i,n,k,P,a,g,e){g=function(){P=h.createElement(i);a=h.getElementsByTagName(i)[0];P.src=k;P.charset="utf-8";P.async=1;a.parentNode.insertBefore(P,a)};T["ThinkPageWeatherWidgetObject"]=n;T[n]||(T[n]=function(){(T[n].q=T[n].q||[]).push(arguments)});T[n].l=+new Date();if(T.attachEvent){T.attachEvent("onload",g)}else{T.addEventListener("load",g,false)}}(window,document,"script","tpwidget","//widget.seniverse.com/widget/chameleon.js"))</script>
                    <script>tpwidget("init", {
                            "flavor": "slim",
                            "location": "WX4FBXXFKE4F",
                            "geolocation": "enabled",
                            "language": "zh-chs",
                            "unit": "c",
                            "theme": "chameleon",
                            "container": "tp-weather-widget",
                            "bubble": "disabled",
                            "alarmType": "badge",
                            "color": "#FFFFFF",
                            "uid": "U9EC08A15F",
                            "hash": "039da28f5581f4bcb5c799fb4cdfb673"
                        });
                        tpwidget("show");</script>
                </div>
            </li>
        </ul>

        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item" >
                <a href="#" id="FullScreen">
                    <img class="img-FullScreen" src="{{asset('cms/images/fullscreen.png')}}">
                    <span>&nbsp;全屏</span></a>
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
                @foreach($menus as $menu)
                    <li class="layui-nav-item">
                        @if($menu['child'])
                            <a class="a-to-Url" href="javascript:;">{{$menu['name']}}</a>
                            <dl class="layui-nav-child">
                                @foreach($menu['child'] as $vo)
                                    <dd><a class="a-to-Url" href="javascript:;" action="{{url($vo['action'])}}">{{$vo['name']}}</a></dd>
                                    {{--<dd><a href="">超链接</a></dd>--}}
                                @endforeach
                            </dl>
                        @else
                            <a class="a-to-Url" href="javascript:;" action="{{url($menu['action'])}}">{{$menu['name']}}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="layui-body">
    {{--<ul class="layui-tab-title">
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
    </ul>--}}
    <!-- 内容主体区域 -->

        {{--@include('home.index.about')--}}
        <iframe class="iframe-body"
                src="{{url('cms/home')}}">
        </iframe>

    </div>
</div>
</body>
</html>