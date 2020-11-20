@extends('layouts.layout')

@section('name')
        Verify
    @endsection
@section('content')
<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="flash-message" style="display: flex;justify-content: center;align-items: center;">
                          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <center><p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p></center>
                            @endif
                          @endforeach
                        </div>
                        <div class="card mt-4 shadow-lg p-3 mb-5 bg-white rounded" >
                            <div class="card-header" align="center"><h3 style="color: #5768ad;">{{ __('Verify Your Email Address') }}</h3></div>
                            <div class="card-body">
                                @if (session('resent'))
                                    <div role="alert">
                                        <p>{{ __('A fresh verification link has been sent to your email address.') }}</p>
                                    </div>
                                @endif

                                <p>{{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email yet') }}</p>
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <center><button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color: #5768ad;">{{ __('Click here to request another') }}</button></center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
@endsection
