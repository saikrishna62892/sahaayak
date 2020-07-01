@extends('layouts.dashboard')

@section('content')
<br>    
<div class="container" id="stats">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Checkins</h5>
                    <h1 align="center">2000</h1>
                    <p class="card-text">Number of times logged into sahaayak.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Posts</h5>
                    <h1 align="center">300</h1>
                    <p class="card-text">Num of posts posted in the website</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Diary</h5>
                    <h1 align="center">100</h1>
                    <p class="card-text">Number of times events added in the diary</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ToDo List</h5>
                    <h1 align="center">50</h1>
                    <p class="card-text">Number of items in the todo List</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h4 class="header-title">Handles</h4>
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#post" role="tab">Post a story</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#diary" role="tab">Cognitive Diary</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#habits" role="tab">Habits</a>
                        </li>
                        <li>
                            <a  href="#stories" data-toggle="tab" role="tab">Shared Stories</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#weavesilk" role="tab">Weave Silk</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#worrytree" role="tab">Worry Tree</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="trad-history mt-4">
                <div class="tab-content" id="myTabContent">
                    <!-- Post a story form begin -->
                    <div class="tab-pane fade show active" id="post" role="tabpanel">
                        @include('stories.create')
                    </div>
                    <!-- Post a story form end -->

                    <!-- Cognitive Diary -->
                    <div class="tab-pane fade show active" id="diary" role="tabpanel">

                    </div>
                    <!-- Cognitive diary end -->

                    <!-- Habits form begin -->
                    <div class="tab-pane fade" id="habits" role="tabpanel">
                                
                    </div>
                    <!-- Habits form end -->
                    
                    <!-- Shared stories form begin -->
                    <div class="tab-pane fade" id="stories" role="tabpanel">
                        @include('stories.shared_stories')   
                    </div>
                    <!-- Shared stories form end -->

                    <!-- Weavesilk form begin -->
                    <div class="tab-pane fade" id="weavesilk" role="tabpanel">
                                
                    </div>
                    <!-- weave silk form end -->

                    <!-- Worry tree form begin -->
                    <div class="tab-pane fade" id="worrytree" role="tabpanel">
                                
                    </div>
                    <!-- worry tree form end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- trading history area end -->


@endsection 