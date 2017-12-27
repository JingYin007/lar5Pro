
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
                    <!-- 加载编辑器的容器 -->
                    <script id="ue-container" name="content"  type="text/plain">
                        @php
                            echo htmlspecialchars_decode($article['content']);
                        @endphp
                    </script>
                    <p class="p-submit">
                        <input class="submit-article" type="submit" value="修改" >
                    </p>
                </div>
                </div>
        </form>
    </div>
    @include('home.layouts.ueditor-js')
@endsection
