@extends('layouts/layout')

    @section('content')

    
    
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Recent News</h2>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <span>News</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Classes Section Begin -->
    <section class="classes spad">
        <div class="container">
            <div class="col-lg-12">
                    <div class="section-title">
                        <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                        <h2>Top News</h2>
                        <p>The trainings are multi-style and you will learn and practice Hatha Vinyasa (flow)<br /> and
                            Yin Yoga.</p>
                    </div>
                </div>
            <div class="row">
                



                @foreach($news as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="classes__item">
                        
                        @if(is_null($item->image))
                            <div class="classes__item__pic set-bg" data-setbg="img/news/default.jpg">
                        @else
                            <div class="classes__item__pic set-bg" data-setbg="img/news/{{$item->image}}">
                        @endif
                            <span>{{$item->created_at}}</span>
                        </div>
                        <div class="classes__item__text">
                            <p>Source:{{$item->source}}</p>
                            <h4>{{$item->headline}}</h4>
                            <h6>{{$item->content}}</span></h6>
                            <?php $newvariable="http://$item->newsurl" ?>
                            <a href="{{$newvariable}}" class="btn btn-primary" target="_blank">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12"><span>{{$news->links()}}</span></div>
                


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
    <!-- Classes Section End -->

    @endsection