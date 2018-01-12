
@extends('home.layouts.home')

@section('content')
    <div class="container">
        <div class="single">
            <div class="blog-to">
                <div class="blog-top">
                    <div class="blog-left">
                        <b>{{date('d',strtotime($article['created_at']))}}</b>
                        <span>{{date('M',strtotime($article['created_at']))}}</span>
                    </div>
                    <div class="top-blog">
                        <a class="fast" href="#">{{$article['title']}} </a>
                        <p>Posted by
                            <a href="#">{{$article['user_name']}}</a>  |
                            <a href="#">{{count($comments)}} Comments</a> |
                            <span class="created_time">{{$article['created_at']}}</span>
                        </p>


                    </div>

                </div>
            </div>
            <div class="blog-content">
                @php
                    echo htmlspecialchars_decode($article['content']);
                @endphp
            </div>
            <div class="single-middle">
                <h3>See Comments</h3>
                @foreach($comments as $vo)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-head_portrait"
                                     src="{{asset($vo['head_portrait'])}}" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="#">{{$vo['user_name']}}</a>
                            </h4>
                            <p>{{$vo['content']}}</p>
                            <span class="comment-time">{{$vo['created_at']}}</span>
                        </div>
                    </div>
                    @foreach($vo['follower'] as $vo2)
                        <div class="media in-media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object img-head_portrait"
                                         src="{{asset($vo2['head_portrait'])}}" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">{{$vo2['user_name']}}</a>
                                </h4>
                                <p>{{$vo2['content']}}</p>
                                <span class="comment-time">{{$vo2['created_at']}}</span>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
            <!---->
        </div>
    </div>

@endsection