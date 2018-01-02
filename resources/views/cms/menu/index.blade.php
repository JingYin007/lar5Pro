@extends('cms.layouts.cms')

@section('body-content')

    <button class="layui-btn layui-btn-normal" onclick="opNavMenu('{{url('cms/menu/add')}}','add')">
        <i class="layui-icon" >&#xe608;</i> 添加导航
    </button>
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
            <th>图标</th>
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
                <td class="td-menu"><img src="{{$vo['icon']}}"></td>
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
@endsection

@section('single-content')
    <script src="{{asset('cms/js/nav_menu.js')}}"></script>
    {{--<script>
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
    </script>--}}
@endsection