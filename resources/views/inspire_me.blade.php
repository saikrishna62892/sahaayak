@extends('layouts.layout')


@section('name')
    Inspire-me
@endsection
    @section('content')

    
    
    <!-- Blog Hero Begin -->
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Inspire Me</h2>
                        <div class="breadcrumb__widget">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Inspire Me</span>
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
            <div class="row">
            @forelse($quotes as $quote)
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="blog__details">
                        <div class="blog__details__author">
                            <div class="blog__details__author__pic">
                                @if(is_null($quote->Image))
                                    <img src="{{ asset('/img/quotes/default.png') }}" alt="">
                                @else
                                    <img src="\Storage::disk('s3')->url('uploads/quote/img/'.$quote->Image)" alt="">
                                @endif
                            </div>
                            <div class="blog__details__author__text">
                                <h4>Author: {{ $quote->Author }}</h4>
                                <p>Inspired from : {{ $quote->Inspired_from }}</p>
                                <p><span>Tags: </span>{{ $quote->Tag }}</p>
                            </div>
                        </div>
                        <div class="blog__details__quote">
                            <p align="justify" style="font-size: 25px;font-weight: bold;font-style: italic;font-family: Futura;"><i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;{{ $quote->Quote }}&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                            <p><a href="{{ $quote->Link }}" style="color:#5768ad;" target="_blank">Read More</a></p>
                        </div>
                    </div>
                </div>
            @empty
                <h4>No Quotes Available</h4>
            @endforelse

        </div>
        <div class="col-lg-12"><span>{{$quotes->links()}}</span></div>
    </section>
    @endsection