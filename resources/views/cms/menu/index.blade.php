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


<table class="layui-table table-body" lay-even="" lay-skin="row">
    <colgroup>
        <col width="150">
        <col width="150">
        <col width="200">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>ID</th>
        <th>导航标题</th>
        <th>action</th>
        <th>父级ID</th>
        <th>排序</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach($menus as $vo)
    <tr>
        <td>{{$vo['id']}}</td>
        <td>{{$vo['name']}}</td>
        <td>{{$vo['action']}}</td>
        <td>{{$vo['parent_id']}}</td>
        <td>{{$vo['list_order']}}</td>
        <td>{{$vo['created_at']}}</td>
        <td>
            <div class="layui-btn-group">
                <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
                <button class="layui-btn layui-btn-sm"><i class="layui-icon"></i></button>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<div id="demo1"></div>
</body>
<script src="{{asset('cms/js/nav_menu.js')}}"></script>
<script>
    layui.use(['laypage', 'layer'], function() {
     var laypage = layui.laypage
     , layer = layui.layer;
        //总页数大于页码总数
        laypage.render({
            elem: 'demo1'
            ,count: 70 //数据总数
            ,jump: function(obj){
                console.log(obj)
            }
        });
     });
</script>
</html>