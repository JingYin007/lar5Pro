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
    <link  href="{{asset('cms/css/zhang.css')}}" rel="stylesheet">
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
                <a href="javascript:;">
                    <img class="nav-icon" src="{{asset('cms/images/icon/cms_tip.png')}}">
                    消息<span class="layui-badge">9</span></a>
            </li>


        </ul>

        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item nav_weather">
                <!-- 天气信息 -->
                @include('layouts.weather')
            </li>
            <li class="layui-nav-item" id="FullScreen">
                <img class="nav-icon" src="{{asset('cms/images/icon/fullscreen.png')}}">
                <span>&nbsp;全屏</span>
            </li>
            <li class="layui-nav-item lockcms" id="LockScreen">
                <a href="javascript:;">
                    <img class="nav-icon" src="{{asset('cms/images/icon/lockScreen.png')}}">
                    <span>锁屏</span>
                </a>
            </li>

            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="{{asset('cms/images/user.png')}}" class="layui-nav-img">
                    moTzxx
                </a>
                <dl class="layui-nav-child">
                    <dd>
                        <a href="">
                            <img class="nav-icon" src="{{asset('cms/images/icon/cms_user.png')}}">
                            基本资料
                        </a>
                    </dd>
                    <dd>
                        <a href="">
                            <img class="nav-icon" src="{{asset('cms/images/icon/cms_secure.png')}}">
                            安全设置
                        </a>
                    </dd>
                    <dd>
                        <a href="">
                            <img class="nav-icon" src="{{asset('cms/images/icon/cms_exit.png')}}">
                            退出
                        </a>
                    </dd>
                </dl>
            </li>
        </ul>
    </div>


    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <div class="user-info">
                <div class="photo-view">
                    <img src="{{asset('cms/images/user.png')}}">
                </div>
                <p>moTzxx 您好，欢迎登录！</p>
            </div>
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->

            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                {{--后台首页 可以写死！--}}
                <li class="layui-nav-item">
                    <a class="a-to-Url single-to-Url" href="javascript:;"
                       action="{{url('cms/home')}}">
                        <i class="layui-icon"><img src="/cms/images/icon/home.png"/></i>
                        后台首页
                    </a>
                </li>
                @foreach($menus as $menu)
                    <li class="layui-nav-item">
                        @if($menu['child'])
                            <a href="javascript:;">
                                <i class="layui-icon"><img src="{{$menu['icon']}}"/></i>
                                {{$menu['name']}}</a>
                            <dl class="layui-nav-child">
                                @foreach($menu['child'] as $vo)
                                    <dd>
                                        <a class="a-to-Url mul-to-Url" href="javascript:;"
                                           action="{{url($vo['action'])}}">
                                            <i class="layui-icon"><img src="{{$vo['icon']}}"/></i>
                                            {{$vo['name']}}
                                        </a>
                                    </dd>
                                    {{--<dd><a href="">超链接</a></dd>--}}
                                @endforeach
                            </dl>
                        @else
                            <a class="a-to-Url single-to-Url" href="javascript:;"
                               action="{{url($menu['action'])}}">
                                <i class="layui-icon"><img src="{{$menu['icon']}}"/></i>
                                {{$menu['name']}}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="layui-body">
        <ul class="layui-tab-title">
            <li class="layui-this title-selected" url="{{url('cms/home')}}">
                <i class="layui-icon">&#xe68e;</i>
                主页
            </li>
            {{--<li class="layui-this" url="{{url('test')}}">
                <span>测试页面</span>
                <i class="layui-icon  layui-tab-close">ဆ</i>
            </li>--}}
            <li class="layui-this refreshThis refresh">
                <span>刷新当前页</span>
                <i class="layui-icon  layui-tab-close">&#x1002</i>
            </li>
        </ul>
        <!-- 内容主体区域 -->

        {{--@include('home.index.about')--}}
        <iframe class="iframe-body"
                src="{{url('cms/home')}}">
        </iframe>

    </div>
</div>
</body>
<script>
    $(".refresh").click(function () {
        if($(this).hasClass("refreshThis")){
            $(this).removeClass("refreshThis");
            $(".layui-layout-admin .layui-body").find("iframe")[0].contentWindow.location.reload(true);
            setTimeout(function(){
                $(".refresh").addClass("refreshThis");
            },2000);
        }else{
            layer.msg("您的刷新速度太快，还是等两秒再刷新吧！");
        }
    });
</script>
</html>