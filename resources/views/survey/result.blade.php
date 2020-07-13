@extends('layouts.layout')
@section('name')
       Result
    @endsection
@section('content')
<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <h1 style="color: #fff;">Hi {{$user_name}}</h1>
                    </div>
                    <p style="color: #fff;">Your {{ $assessment_name }} score is {{ $score }}/{{$questions_count}}.</p>
                    <p style="color: #fff;"><a href="{{ url('/') }}" style="color: #5768ad;">Home</a> / Result</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
@endsection