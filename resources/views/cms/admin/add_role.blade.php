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
            <input type="hidden" name="nav_menu_ids" class="nav_menu_ids" value="">
            <div class="layui-input-block">
                <table class="layui-table table-nav-menus">
                    <colgroup>
                        <col width="10%">
                        <col>
                    </colgroup>
                    <tbody>
                    @foreach($menus as $vo)
                        <tr>
                            <td class="td-menu-parent td-nav-menu">
                                {{$vo['name']}}
                                <input type="checkbox" class="cb-nav-menu" name="" value="{{$vo['id']}}" lay-skin="switch" lay-text="ON|OFF" checked>
                            <td class="td-menu-child td-nav-menu">
                                @foreach($vo['child'] as $voi)
                                    <input type="checkbox" class="cb-nav-menu" name="" value="{{$voi['id']}}" title="{{$voi['name']}}" checked>
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
        /**
         * 添加新角色
         */
        function addNewRole() {
            getNavmenuIDs();
            var postData = $(".form-opRoles").serialize();
            var toUrl = "{{url('cms/admin/addRole')}}";
            ToPostPopupsDeal(toUrl,postData);
        }
        /**
         * 子级别菜单的选择
         */
        $(".table-nav-menus .td-menu-child").click(function () {
            getNavmenuIDs();
        });
        //父级菜单的选择
        $(".table-nav-menus .td-menu-parent").click(function () {
            //判断当前是否选中状态
            var tag = $(this).children("input[type='checkbox']").is(':checked')
            if(!tag){
                //TODO 此时为未选中状态
                $(this).next().children(".layui-form-checkbox").removeClass("layui-form-checked");
            }else {
                $(this).next().children(".layui-form-checkbox").addClass("layui-form-checked");
            }
        });
        /**
         * 获取所有被选中的导航菜单
         */
        function getNavmenuIDs() {
            var navmenuIDs = "";
            $(".table-nav-menus input:checkbox:checked").each(function(i)
            {
                navmenuIDs += $(this).val()+",";
            });
            $(".nav_menu_ids").val(navmenuIDs);
        }
    </script>
@endsection




