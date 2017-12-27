<script src="{!!asset('/laravel-u-editor/ueditor.config.js')!!}"></script>
<script src="{!!asset('/laravel-u-editor/ueditor.all.min.js')!!}"></script>
{{-- 载入语言文件,根据laravel的语言设置自动载入 --}}
<script src="{!!asset($UeditorLangFile)!!}"></script>
<script type="text/javascript">
    var ue = UE.getEditor('ue-container');
    ue.ready(function(){
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
    });
</script>