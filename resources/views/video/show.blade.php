@extends('layouts.layout')
    @section('content')
    
    <!-- Blog Hero Begin -->
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Motivational Videos</h2>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <span>Videos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero End -->
    
<!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            {{ $count=1}}
            @foreach($embedURLs as $key1 => $embedURL2)
            <div class="row">
                @foreach($embedURL2 as $key => $embedURL)
                <div class="col-lg-6 order-lg-2 order-1">
                    <h2>#{{ $count++ }}</h2>
                    <div class="blog__details">
                        <div class="blog__details__author">
                            <div class="blog__details__author__pic">
                                <img src="img/blog/details/blog-posted.png" alt="">
                            </div>
                            <div class="blog__details__author__text">
                                <h4>Author: </h4>
                                <p>Inspired from :</p>
                                <p><span>Tags:</span> All, Trending, Fuel, Cardio, Life Style</p>
                            </div>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! $embedURL !!}
                            
                        </div>      
                    </div>
                </div>
                @endforeach
            </div>
            <br>
            @endforeach
            <div class="row">
                <div class="col-lg-12">
                    <div class="classes__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#"><span class="arrow_carrot-right"></span></a>
                    </div>
                </div>  
            </div>
        
        </div>
    </section>
    @endsection