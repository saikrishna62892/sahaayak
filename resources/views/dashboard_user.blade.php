@extends('layouts.dashboard')

@section('name')
    {{ $user->name }}
@endsection

@section('content')
<br>    
<div class="container" id="stats">
    <div class="row">
        <div class="col-sm-3">
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title" align="center">Checkins</h5>
                    <p align="center">#Logins</p>
                    <h1 align="center" align="center">{{ $checkins }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title" align="center">Posts</h5>
                    <p align="center">#shared Stories</p>
                    <h1 align="center" align="center">{{ $stories_count }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title" align="center">Diary</h5>
                    <p align="center">#events in Diary</p>
                    <h1 align="center" align="center">{{ $events_count }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow p-4 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title" align="center">Worries</h5>
                    <p align="center">#number of worries</p>
                    <h1 align="center" align="center">{{ $worries_count }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- flash messages section begin -->
    <div class="flash-message">
      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <center><p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p></center>
        @endif
      @endforeach
    </div>
<!-- flash messages section end -->


<!-- trading history area start -->
<div class="col-lg-12 mt-sm-30 mt-xs-30" id="forms">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h4 class="header-title">Handles</h4>
                <div class="trd-history-tabs">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#appointment" role="tab">My Appointments</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#post" role="tab">Post a story</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#diary" role="tab">Cognitive Diary</a>
                        </li>
                        <li>
                            <a  href="#stories" data-toggle="tab" role="tab">Shared Stories</a>
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
                    <div class="tab-pane fade show active" id="appointment" role="tabpanel">
                        @include('appointment.user_appointments')
                    </div>
                    <!-- Post a story form end -->

                    <!-- Post a story form begin -->
                    <div class="tab-pane fade show" id="post" role="tabpanel">
                        @include('stories.create')
                    </div>
                    <!-- Post a story form end -->

                    <!-- Cognitive Diary -->
                    <div class="tab-pane fade" id="diary" role="tabpanel">
                        @include('diary.create')
                    </div>
                    <!-- Cognitive diary end -->
                    
                    <!-- Shared stories form begin -->
                    <div class="tab-pane fade" id="stories" role="tabpanel">
                        @include('stories.shared_stories')   
                    </div>
                    <!-- Shared stories form end -->

                    <!-- Worry tree form begin -->
                    <div class="tab-pane fade" id="worrytree" role="tabpanel">
                        @include('worrytree')         
                    </div>
                    <!-- worry tree form end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- trading history area end -->


@endsection 