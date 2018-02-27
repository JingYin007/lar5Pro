<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>首页</title>
    <!-- load layui -->
    @include('layouts.layui')
<!-- 加载公共文件  -->
    <link  href="{{asset('cms/css/zhang.css')}}" rel="stylesheet">
    <script type='text/javascript' src="{{asset('cms/js/moZhang.js')}}" ></script>
    <style>
        .img-home{
            width: 99%;
        }
    </style>
</head>

<body>

<blockquote class="layui-elem-quote">
    更新日志：
</blockquote>
<div class="div-timeline">
    <ul class="layui-timeline">
        <li class="layui-timeline-item">
            <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
            <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title">2018年02月12日</h3>

                <p>CSDN文章上线
                    <a target="_blank" href="http://blog.csdn.net/u011415782/article/details/79307673">
                        moTzxx-CMS —— [一个基于PHP代码的后台管理系统]
                    </a>
                </p>
                <ul>
                    <li>简单整理文章，进行截图展示</li>
                    <li>补充 README 文档，测试项目初始化安装顺利情况</li>
                </ul>
            </div>
        </li>
        <li class="layui-timeline-item">

            <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
            <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title">2017年12月13日</h3>

                <p>初始化创建</p>
                <ul>
                    <li>GitHub 项目同步</li>
                    <li>前台页面设计</li>
                    <li>创建数据表信息,测试初始化数据迁移效果</li>
                </ul>
            </div>

        </li>
        <li class="layui-timeline-item">
            <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
            <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title">落叶灰黄，寒风渐起 ~~</div>
            </div>
        </li>
    </ul>
</div>

{{--<img class="img-home" src="{{asset('cms/images/home.jpg')}}">--}}
</body>
</html>
<script>
    //注意：选项卡 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>