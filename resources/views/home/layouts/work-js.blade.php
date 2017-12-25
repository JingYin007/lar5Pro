<script type="text/javascript" src="{{asset('home/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js')}}"></script>
<script type="text/javascript" src="{{asset('home/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('home/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css')}}"
      media="screen" />
<script type="text/javascript">
    $(document).ready(function () {

        $("a[rel=example_group]").fancybox({
            'transitionIn': 'none',
            'transitionOut': 'none',
            'titlePosition': 'over',
            'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
                return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
            }
        });

    });
</script>