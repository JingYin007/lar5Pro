
@extends('home.layouts.home')

@section('content')
    <div class="container">
        <form action="{{url('article/store')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="article_id" value="{{$article['id']}}">
            <div class="single">
                <div class="blog-to">
                    <div class="blog-top">
                        <div class="blog-left">
                            <b>{{date('d',strtotime($article['created_at']))}}</b>
                            <span>{{date('M',strtotime($article['created_at']))}}</span>
                        </div>
                        <div class="top-blog">
                            <input type="text" name="title" class="edit-title" value="{{$article['title']}}" />
                            <p>Posted by
                                <a href="#">{{$article['user_name']}}</a>  |
                                <a href="#">{{count($comments)}} Comments</a> |
                                <span class="created_time">{{$article['created_at']}}</span>
                            </p>
                        </div>

                    </div>
                </div>
                <!---->
                <div class="single-bottom blog-content">
                    <textarea cols="77" rows="6" name="content">
                        {{$article['content']}}
                    </textarea>


                    {{--<div class="col-sm-10">
                    @include('vendor.UEditor.head')
                    <!-- 加载编辑器的容器 -->
                        <script id="container" name="content" type="text/plain" style='width:100%;height:300px;'>
                            {!! html_entity_decode($article->content) !!}
                        </script>
                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                        var ue = UE.getEditor('container');
                        ue.ready(function(){
                            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
                        });
                        </script>
                    </div>--}}


                    <input class="submit-article" type="submit" value="修改" >
                </div>
            </div>
        </form>
    </div>

@endsection