@extends('layouts/layout')

    @section('content')

    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        @yield('breadcrumb')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Classes Section Begin -->
    <section class="classes-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="classes__details">
                        @yield('learncontent')
                        <!-- Faq Begin -->
                        @yield('faq')
                        <!-- Faq End -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="classes__sidebar">
                        <div class="classes__sidebar__item classes__sidebar__item--info">
                            <h4>@yield('learnname')</h4>
                        </div>
                        <div class="classes__sidebar__item">
                            <h4>Review & Comment</h4>
                            <div class="classes__sidebar__comment__list">
                                @forelse($comments as $comment)
                                <div class="classes__sidebar__comment">
                                    <div class="classes__sidebar__comment__pic">
                                        <img src="/img/classes-details/comment-1.png" alt="">
                                        <div class="classes__sidebar__comment__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                    <div class="classes__sidebar__comment__text">
                                        <span>{{$comment->created_at}}</span>
                                        <h6>{{$comment->user->name}}</h6>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </div>
                                @empty
                                <p>No Reviews Yet.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->

    <!-- Leave Comment Begin -->
    <div class="leave-comment spad" style="padding: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="leave__comment__text">
                        <div class="section-title">
                        <img src="/img/icon.png" alt="Sahaayak" width="58" height="38">
                        <h2>Leave a Comment</h2>
                        </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Drop Your Comment Here</h5>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <form action="/home/learn/{{$learn}}/comment/{{$learnID}}" method="post">
<<<<<<< HEAD
                                    <textarea placeholder="Your Comment" name="comment" rows="2" autocomplete="off" ></textarea>
                                    @error('comment')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    @csrf
                                    <button type="submit" class="site-btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leave Comment End -->

    @endsection