@extends('layouts.layout')

@section('name')
    Talks
@endsection

    @section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Expert Talks</h2>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <span>Talks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-1 order-1">
                    <div class="row">
                        <h4>Expert Talks</h4>
                        <?php $count=0; ?>
                        <!-- Faq Begin -->
                        <div class="faq spad">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-11">
                                        <div class="faq__accordion">
                                            <div class="accordion" id="accordionExample">
                                                @foreach($talks as $talk)
                                                    <div class="card">
                                                        @if($count==0)
                                                            <div class="card-heading active">
                                                        @else
                                                            <div class="card-heading">
                                                        @endif
                                                            <a data-toggle="collapse" data-target="#collapse{{ $talk->id }}">
                                                                <span>{{ $talk->title }}</span>
                                                            </a>
                                                        </div>
                                                        @if($count==0)
                                                            <div id="collapse{{ $talk->id }}" class="collapse show" data-parent="#accordionExample">
                                                        @else
                                                            <div id="collapse{{ $talk->id }}" class="collapse" data-parent="#accordionExample">
                                                        @endif
                                                        <?php $count++; ?>

                                                            <div class="card-body">
                                                                <div class="blog__details__large">
                                                                    @if(is_null($talk->image))
                                                                        <img src="{{ asset('/img/talks/default1.jpg') }}" alt="" width="700" height="350">
                                                                    @else
                                                                        <img src="{{ asset('/img/talks/'.$talk->image) }}" alt="" width="700" height="350">
                                                                    @endif
                                                                    <span>{{ $talk->category }}</span>
                                                                </div>
                                                                <div class="blog__details__text blog__item__text">
                                                                    <ul>
                                                                        <li><i class="fa fa-calendar-o"></i>{{ $talk->created_at }}</li>
                                                                        <li><a href="{{ route('increment', $talk) }}" class="fa fa-thumbs-up" style="color: black"></a>{{ $talk->likes }}</li>
                                                                    </ul>
                                                                    <p align="justify">{{ $talk->content }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Faq End -->
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2 order-2">
                    <div class="blog__sidebar">
                        <div class="row">
                            <div class="blog__sidebar__categories">
                                <h4>Categories</h4>
                                <ul>
                                    <li><a href="#">All({{ $count }})</a></li>
                                    <li><a href="#">Depression({{ count($category_count[0]) }})</a></li>
                                    <li><a href="#">Suicide({{ count($category_count[1]) }})</a></li>
                                    <li><a href="#">Stress({{ count($category_count[2]) }})</a></li>
                                    <li><a href="#">Stigma({{ count($category_count[3]) }})</a></li>
                                </ul>
                            </div>
                            <br>
                            <div class="blog__sidebar__categories">
                                <h4>.</h4>
                                <ul>
                                    <li><a href="#">&emsp;Healthy Sleep({{ count($category_count[4]) }})</a></li>
                                    <li><a href="#">&emsp;Mental Illness({{ count($category_count[5]) }})</a></li>
                                    <li><a href="#">&emsp;Hopelessness({{ count($category_count[6]) }})</a></li>
                                    <li><a href="#">&emsp;Fear of Loss({{ count($category_count[7]) }})</a></li>
                                    <li><a href="#">&emsp;Social Isolation({{ count($category_count[8]) }})</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__sidebar__recent">
                            <h4>Recent News</h4>
                            @include('news.recent_news')
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection


















