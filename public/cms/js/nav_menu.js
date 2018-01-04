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
        area: ['50%', '90%'],
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
function ToDelNavMenu(id,toUrl) {
    var tag_token = $(".tag_token").val();
    var postData = {'id':id,'tag':'del','_token':tag_token};
    layer.msg('确定要删除此菜单吗？', {
        time: 0 //不自动关闭
        ,btn: ['确定', '离开']
        ,yes: function(index){
            afterDelNavMenu(toUrl,postData,id);
        }
    });
}
function afterDelNavMenu(toUrl,postData,id) {
    $.post(
        toUrl,
        postData,
        function (result) {
            dialog.tip(result.message);
            if(result.status == 1){
                ToRemoveDiv(".tr-menu-"+id);
            }else{
                //失败
                layer.msg(result.message);
            }
        },"JSON");
}

// 出去页面所显示的记录 传递 div
function ToRemoveDiv(tag) {
    $(tag).remove();
}