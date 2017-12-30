/*自定义js事件 by:moTzxx*/

$(document).ready(function () {
    $(".layui-header .menu-switch").click(function () {
        var leftView = $(".layui-bg-black");
        if(leftView.is(':hidden')){
            leftView.show();
        }else {
            leftView.hide();
        }

    });

});

