function opNavMenu(op_url,tag) {
    var title = '';
    if(tag == 'add'){
         title = '添加导航菜单';
    }else {
        title = '菜单信息修改';
    }
    layer.open({
        type: 2,
        title: title,
        shadeClose: true,
        shade: false,
        maxmin: true, //开启最大化最小化按钮
        area: ['893px', '600px'],
        content: [op_url, 'no'],
    });
}
