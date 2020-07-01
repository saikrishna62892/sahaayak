@extends('layouts.layout')

    @section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Discover Stories</h2>
                        <h5>Some text.................</h5>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <span>Stories</span>
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
                        <h4>Stories</h4>
                        <?php $count=0; ?>
                        <!-- Faq Begin -->
                        <div class="faq spad">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-11">
                                        <div class="faq__accordion">
                                            <div class="accordion" id="accordionExample">
                                                @foreach($stories as $story)
                                                    <div class="card">
                                                        @if($count==0)
                                                            <div class="card-heading active">
                                                        @else
                                                            <div class="card-heading">
                                                        @endif
                                                            <a data-toggle="collapse" data-target="#collapse{{ $story->id }}">
                                                                <span>{{ $story->title }}</span>
                                                            </a>
                                                        </div>
                                                        @if($count==0)
                                                            <div id="collapse{{ $story->id }}" class="collapse show" data-parent="#accordionExample">
                                                        @else
                                                            <div id="collapse{{ $story->id }}" class="collapse" data-parent="#accordionExample">
                                                        @endif
                                                        <?php $count++; ?>

                                                            <div class="card-body">
                                                                <div class="blog__details__large">
                                                                    @if(is_null($story->image))
                                                                        <img src="{{ asset('/img/stories/default.PNG') }}" alt="" width="700" height="350">
                                                                    @else
                                                                        <img src="{{ asset('/img/stories/'.$story->image) }}" alt="" width="700" height="350">
                                                                    @endif
                                                                    <span>{{ $story->category }}</span>
                                                                </div>
                                                                <div class="blog__details__text blog__item__text">
                                                                    <ul>
                                                                        <li><i class="fa fa-calendar-o"></i>{{ $story->created_at }}</li>
                                                                        <li><a href="{{ route('increment', $story) }}" class="fa fa-thumbs-up" style="color: black"></a>{{ $story->likes }}</li>
                                                                    </ul>
                                                                    <p>{{ $story->content }}</p>
                                                                    <h6>Post yor stories anonymously <a href="#" style="color: #5768ad;">Register here.</a></h6>
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
                        
                        <div class="col-lg-12">
                            <div class="classes__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#"><span class="arrow_carrot-right"></span></a>
                            </div>
                        </div>
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
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-1.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>09 Kinds Of Vegetables Protect The Liver</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-2.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>Tips You To Balance Nutrition Meal Day</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-3.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>4 Principles Help You Lose Weight With Vegetables</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-1.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>09 Kinds Of Vegetables Protect The Liver</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-2.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>Tips You To Balance Nutrition Meal Day</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                            <div class="blog__recent__item">
                                <div class="blog__recent__item__pic">
                                    <img src="img/blog/br-3.jpg" alt="">
                                </div>
                                <div class="blog__recent__item__text">
                                    <h6>4 Principles Help You Lose Weight With Vegetables</h6>
                                    <span>MAR 05, 2019</span>
                                    <a href="#">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection


















