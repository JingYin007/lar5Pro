@extends('cms.layouts.cms')
@section('body-content')
    <form class="layui-form form-opRoles layui-form-pane">
        <input type="hidden" name="_token" class="tag_token" value="<?php echo csrf_token(); ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">角色称呼：</label>
            <div class="layui-input-inline">
                <input type="text" name="user_name" required lay-verify="required"
                       value="{{$role['user_name']}}"
                       placeholder="请输入昵称" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">请十个字以内</div>
        </div>


        <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-block">
                <input type="radio" name="status" value="1" title="正常"
                       @if ($role['status'] == 1)
                       checked
                       @endif;>
                <input type="radio" name="status" value="-1" title="无效"
                       @if ($role['status'] == -1)
                       checked
                       @endif;>
            </div>
        </div>

        <div class="layui-form-item layui-form-text">

            <label class="layui-form-label">权限分配：</label>
            <input type="hidden" name="nav_menu_ids" class="nav_menu_ids" value="{{$role['nav_menu_ids']}}">
            <div class="layui-input-block">
                <table class="layui-table table-nav-menus">
                    <colgroup>
                        <col width="12%">
                        <col>
                    </colgroup>
                    <tbody>
                    @foreach($menus as $vo)
                        <tr>
                            <td class="td-menu-parent td-nav-menu">
                                <p>{{$vo['name']}}</p>
                                <input type="checkbox" class="cb-nav-menu" value="{{$vo['id']}}"
                                       lay-skin="switch" lay-text="ON|OFF"
                                        @php
                                            if(in_array($vo['id'],$menuSelf))
                                            {
                                                echo " checked";
                                            }
                                        @endphp
                                >
                            </td>
                            <td class="td-menu-child td-nav-menu">
                                @foreach($vo['child'] as $voi)
                                    <input type="checkbox" class="cb-nav-menu" value="{{$voi['id']}}"
                                           title="{{$voi['name']}}"
                                            @php
                                                if(in_array($voi['id'],$menuSelf)){
                                                    echo " checked";
                                                }
                                            @endphp
                                    >
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="layui-form-item">
            <div class="layui-input-block div-form-op">
                <button class="layui-btn" type="button" onclick="editRole({{$role['id']}})"
                        lay-submit lay-filter="formDemo">提交</button>
                <button type="reset"  class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

@endsection

@section('single-content')
    <script src="{{asset('cms/js/roles.js')}}"></script>
    <script src="{{asset('cms/js/moZhang.js')}}"></script>
    <script>

        function editRole(id) {
            dealSelNavMenuIDs();
            var postData = $(".form-opRoles").serialize();
            var toUrl = "{{url('cms/admin/editRole',['id'=>'RoleID'])}}";
            toUrl = toUrl.replace('RoleID',id);
            ToPostPopupsDeal(toUrl,postData);
        }
    </script>
@endsection




