<link  href="{{asset('layui/css/layui.css')}}" rel="stylesheet">
<!--采用模块化方式-->
<script type="text/javascript" src="{{asset('layui/layui.js')}}"></script>
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>--}}

<!-- 关于layUI的配置 可使用“dialog.fun()”调用 -->
<script>

    /*自定义弹出框格式 (常用的弹出框形式)*/
    var dialog = {
        error: function(message,url) {
            layer.open({
                content:message,
                title:false,
                icon:3,
                yes : function(){
                    location.href=url;
                },
            });
        },
        /*用于弹出框提示*/
        tip:function (message,timer) {
            if(!timer){timer = 2;}
            layer.msg(message,{time:timer * 1000});
        },
        /*显示加载的效果 type:样式 [null,1,2] */
        loading:function (type) {
            layer.load(type);
            //此处演示关闭
            setTimeout(function(){
                layer.closeAll('loading');
            }, 2000);
        },
    };
    <!-- end 自定义弹出框格式 -->

    <!-- 全局配置 -->
    layui.config({
        version: false //一般用于更新模块缓存，默认不开启。设为true即让浏览器不缓存。也可以设为一个固定的值，如：201610
        ,debug: false //用于开启调试模式，默认false，如果设为true，则JS模块的节点会保留在页面
        ,base: '' //设定扩展的 Layui 模块的所在目录，一般用于外部模块扩展
    });
    <!-- end 自定义弹出框格式 -->


    <!-- 加载所需模块 -->
    layui.use(['laypage', 'layedit','element'],
        function(laypage, layedit,element){
            //使用分页
            //laypage();
            //建立编辑器
            //layedit.build();
        });
    <!-- end 加载所需模块 -->
</script>