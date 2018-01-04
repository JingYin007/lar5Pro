function opNavMenu(op_url,tag) {
    var title = '';
    if(tag == 'add'){
         title = '添加导航菜单';
    }else {
        title = '菜单信息修改';
    }
    layer.open({
        type: 2,
        moveOut: true,
        title: title,
        maxmin: true, //开启最大化最小化按钮
        area: ['50%', '60%'],
        content: op_url, //可以出现滚动条
        //content: [op_url, 'no'], //如果你不想让iframe出现滚动条
    });
}

function ToPostDeal(toUrl,postData) {
    $.post(
        toUrl,
        postData,
        function (result) {
            dialog.tip(result.message);
            if(result.status == 1){
                setTimeout(function(){
                    window.parent.location.reload();
                    parent.layer.close(index);
                },2000);
            }else{
                //失败
                layer.msg(result.message);
            }
        },"JSON");
}
