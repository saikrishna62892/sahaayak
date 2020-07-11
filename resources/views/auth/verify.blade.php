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
                        <div class="col-lg-8">
                            <div class="card-header"><p style="color: #fff;" align="center">{{ __('Verify Your Email Address') }}</p></div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div role="alert">
                                        <p style="color: #fff;">{{ __('A fresh verification link has been sent to your email address.') }}</p>
                                    </div>
                                @endif

                                <p style="color: #fff;">{{ __('Before proceeding, please check your email for a verification link.') }}
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
