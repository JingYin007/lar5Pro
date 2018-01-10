
@extends('home.layouts.home')

@section('content')
    <div class="review">
        <div class="container">
            <div class="review-grids">
                @foreach($list as $value)
                    <div class="col-md-6 revw">
                        <div class="rft-grid">
                            <div class="col-md-5 rft-pic">
                                <a href="{{url('article/'.$value['id'])}}">
                                    <img src="{{asset($value['picture'])}}"
                                         class="img-responsive review-img-responsive" alt=""/></a>
                            </div>
                            <div class="col-md-7 rft-pic-info div-article-view">
                                <h4><a href="{{url('article/'.$value['id'])}}">{{$value['title']}}</a></h4>
                                <p class="p-article-abstract"> {{$value['abstract']}}</p>
                            </div>
                            <div class="clearfix article-clearfix"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection