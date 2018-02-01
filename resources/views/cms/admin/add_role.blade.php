@extends('cms.layouts.cms')
@section('body-content')
    <form class="layui-form form-opRoles layui-form-pane">
        <input type="hidden" name="_token" class="tag_token" value="<?php echo csrf_token(); ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">角色称呼：</label>
            <div class="layui-input-inline">
                <input type="text" name="user_name" required lay-verify="required"
                       placeholder="请输入昵称" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">请十个字以内</div>
        </div>


        <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-block">
                <input type="radio" name="status" value="1" title="正常" checked>
                <input type="radio" name="status" value="-1" disabled="" title="无效">
            </div>
        </div>

        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">权限分配：</label>
            <div class="layui-input-block">
                <textarea placeholder="请输入内容" name="nav_menu_ids" required
                          lay-verify="required" class="layui-textarea"></textarea>
            </div>

            <table class="layui-table table-nav-menus">
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col>
                </colgroup>
                <tbody>
                @foreach($menus as $vo)
                    <tr>
                        @foreach($vo['child'] as $voi)
                            <td><input type="checkbox" name="" title="{{$voi['name']}}"></td>
                        @endforeach
                    </tr>
                @endforeach


                </tbody>
            </table>


        </div>

        <div class="layui-form-item">
            <div class="layui-input-block div-form-op">
                <button class="layui-btn" type="button" onclick="addNewRole()"
                        lay-submit lay-filter="formDemo">添加</button>
                <button type="reset"  class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

@endsection

@section('single-content')
    <script src="{{asset('cms/js/roles.js')}}"></script>
    <script src="{{asset('cms/js/moZhang.js')}}"></script>
    <script>

        function addNewRole() {
            var postData = $(".form-opRoles").serialize();
            var toUrl = "{{url('cms/admin/addRole')}}";
            ToPostPopupsDeal(toUrl,postData);
        }
    </script>
@endsection




