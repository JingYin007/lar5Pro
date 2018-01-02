@extends('cms.layouts.cms')
@section('body-content')
    <form class="layui-form form-opNavMenu" action="post">
        {{csrf_field()}}
        <div class="layui-form-item">
            <label class="layui-form-label">导航标题：</label>
            <div class="layui-input-inline">
                <input type="text" name="name" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">请七个字以内</div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">个性图标：</label>
                <div class="layui-upload">
                    <button type="button" class="layui-btn btn_upload_img" value="{{csrf_token()}}">上传图片</button>
                        <img class="layui-upload-img img-upload-view">
                        <p id="demoText"></p>
                </div>
        </div>




        <div class="layui-upload">
            <button type="button" class="layui-btn" id="test1">上传图片</button>
            <div class="layui-upload-list">
                <img class="layui-upload-img" id="demo1">
                <p id="demoText"></p>
            </div>
        </div>





        <div class="layui-form-item">
            <label class="layui-form-label">父级导航：</label>
            <div class="layui-form-mid">
                <select name="parent_id" lay-verify="required">
                    <option value="0">根级导航</option>
                    <option value="1">文章管理</option>
                    <option value="2">菜单管理</option>
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">action：</label>
            <div class="layui-input-inline">
                <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">(example:cms/menu)</div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">排序：</label>
            <div class="layui-input-inline">
                <input type="number" name="list_order" value="0" required lay-verify="required"
                       placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">(数字越大，排序越靠前)</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-block">
                <input type="radio" name="status" value="0" title="正常" checked>
                <input type="radio" name="status" value="-1" title="删除">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">文本域</label>
            <div class="layui-input-block">
                <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
@endsection

@section('single-content')
    <script src="{{asset('cms/js/nav_menu.js')}}"></script>
@endsection




