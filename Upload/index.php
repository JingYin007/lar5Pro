<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Layui 上传图片</title>
	<script type="text/javascript" src="layui/layui.js"></script>
	<link rel="stylesheet" type="text/css" href="layui/css/layui.css" />
	<style type="text/css">
	.site-demo-upload,
	.site-demo-upload img{width: 200px; height: 200px; border-radius: 100%;}
	.site-demo-upload{position: relative; background: #e2e2e2;}
	.site-demo-upload .site-demo-upbar{position: absolute; top: 50%; left: 50%; margin: -18px 0 0 -56px;}
	.site-demo-upload .layui-upload-button{background-color: rgba(0,0,0,.2); color: rgba(255,255,255,1);}
	</style>
</head>
<body>
	<div style="width:1000px; margin: 0 auto;">
		<div style="width: 100%;height:50px;line-height:50px;font-weight:700;font-size:30px; text-align:center;">
			Layui上传图片
		</div>
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
			<legend>上传图片</legend>
		</fieldset>
           
		<div class="site-demo-upload">
			<img id="LAY_demo_upload" src="layui/images/tong.jpg">
			<div class="site-demo-upbar">
				<input type="file" name="img_upload" class="layui-upload-file" id="img_upload">
			</div>
		</div>
	</div>
	<script type="text/javascript">
   		layui.use(['form', 'upload'], function(){
   			var form = layui.form();
   			layui.upload({
				url : 'upload.php?act=images',	//提交到的地址 可以自定义其他参数
				elem : '',	//指定元素的选择器，默认直接查找class为layui-upload-file的元素
				method : 'POST',	//设置http类型，如：post、get。默认post。也可以直接在input设置lay-method="get"来取代。
				type : 'images',	//[images 图片类型，默认][file普通文件类型][video视频文件类型][audio音频文件类型]
				ext : 'jpg|png|gif',	//自定义支持的文件格式
				unwrap : false,	//是否不改变input的样式风格。默认false
				before : function(input){
					//执行上传前的回调	可以判断文件后缀等等
					layer.msg('上传中，请稍后......', {icon:16, shade:0.5, time:0});
				},
				success: function(res){
					if(res.status != 0){
						layer.msg(res.message, {icon:2, shade:0.5, time:res.time});
					}else{
						layer.msg("文件上传成功", {icon:1, shade:0.5, time:res.time});
						layui.jquery('#LAY_demo_upload').attr("src", res.message);
					}
					//console.log(res); //上传成功返回值，必须为json格式
				}
   			});
   		});
	</script>
</body>
</html>