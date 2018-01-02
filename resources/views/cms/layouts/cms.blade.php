<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>导航列表</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@include('layouts.layui')
<!-- 加载公共文件  -->
    <link  href="{{asset('cms/css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="div-body-show">
@yield('body-content')
</div>

<script>

</script>
</body>
@yield('single-content')
</html>