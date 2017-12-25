
@extends('home.layouts.home')

@section('content')
    <div class="gallery">
        <div class="container">
            <h2>Gallery</h2>
            <div class="gallery-bottom">
                <div class="gallery-1">
                    <div class="col-md-3 gallery-grid">
                        <a class="example-image-link" href="{{asset('home/images/g2.jpg')}}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{asset('home/images/g2.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-grid">
                        <a class="example-image-link" href="{{asset('home/images/g1.jpg')}}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{asset('home/images/g1.jpg')}}" alt=""/></a>
                    </div>
                    <div class="col-md-3 gallery-grid">
                        <a class="example-image-link" href="{{asset('home/images/g3.jpg')}}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{asset('home/images/g3.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-grid">
                        <a class="example-image-link" href="{{asset('home/images/g4.jpg')}}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{asset('home/images/g4.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="gallery-1">
                    <div class="col-md-3 gallery-grid">
                        <a class="example-image-link" href="{{asset('home/images/g5.jpg')}}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{asset('home/images/g5.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-grid">
                        <a class="example-image-link" href="{{asset('home/images/g6.jpg')}}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{asset('home/images/g6.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-grid">
                        <a class="example-image-link" href="{{asset('home/images/g9.jpg')}}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{asset('home/images/g9.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-grid">
                        <a class="example-image-link" href="{{asset('home/images/g7.jpg')}}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{asset('home/images/g7.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

@endsection