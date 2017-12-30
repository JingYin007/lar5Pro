/*自定义js事件 by:moTzxx*/

$(document).ready(function () {
    /**
     * 左侧导航栏 显示与隐藏的设置
     */
    $(".layui-header .menu-switch").click(function () {
        var leftView = $(".layui-bg-black");
        var hidden = leftView.is(':hidden');
        var layui_body = $(".layui-layout-admin .layui-body");
        var layui_footer = $(".layui-layout-admin .layui-footer");
        leftView.animate({width: 'toggle'});
        if(hidden){
            layui_body.animate({
                left:parseInt(layui_body.css('left'),200) == 200 ? +layui_body.outerWidth() : 200
            });
            layui_footer.animate({
                left:parseInt(layui_footer.css('left'),200) == 200 ? +layui_footer.outerWidth() : 200
            });
        }else {
            layui_body.animate({
                left:parseInt(layui_body.css('left'),10) == 0 ? -layui_body.outerWidth() : 0
            });
            layui_footer.animate({
                left:parseInt(layui_footer.css('left'),10) == 0 ? -layui_footer.outerWidth() : 0
            });
        }
    });

});

