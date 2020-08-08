@extends('layouts.reg_forms_layout')
@section('name')
    Join-us
@endsection
    @section('content') 
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-30">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" >
                    @csrf
                    <span class="login100-form-title p-b-25">
                        SignUp
                    </span>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        @csrf
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-user"></span>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password" minlength="8" maxlength="15">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        @error('password')
                                    <span role="alert">
                                        <p style="color:red;" align="center">*{{ $message }}</p>
                                    </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" align="center">
                        Role&emsp;
                                <label class="radio-container m-r-20">
                                    <input type="radio" checked="checked" name="is_Volunteer" value="0">
                                    <span class="checkmark"></span>User
                                </label>
                                <label class="radio-container">
                                    <input type="radio" name="is_Volunteer" value="1">
                                    <span class="checkmark"></span>Volunteer
                                </label>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" align="center">
                        <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                        @if($errors->has('g-recaptcha-response'))
                            <span class="invalid-feedback" style="display: block;">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="contact100-form-checkbox m-l-4" data-validate = "Accept terms and conditions">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="terms" value="1">
                        <label class="label-checkbox100" for="ckb1">
                            By checking this box, I certify that I have read and accept the terms&conditions and the privacy policy and I will adhere to the terms.
                        </label>
                        @error('terms')
                                    <span role="alert">
                                        <p style="color:red;" align="center">*{{ $message }}</p>
                                    </span>
                        @enderror
                    </div>
                    
                    <div class="container-login100-form-btn p-t-12">
                        <button class="login100-form-btn">
                            SignUp
                        </button>
                    </div>

                    <div class="text-center w-full p-t-12 p-b-12">
                        <span class="txt1">
                            Or Signup with
                        </span>
                    </div>

                    <a href="{{ url('auth/facebook') }}" class="btn-face m-b-10">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="{{ url('auth/google') }}" class="btn-google m-b-10">
                        <img src="img/icons/icon-google.png" alt="GOOGLE">
                        Google
                    </a>

                    <div class="text-center w-full p-t-4">
                        <span class="txt1">
                            Already Signed?
                        </span>

                        <a class="txt1 bo1 hov1" href="{{ route('login') }}">
                            Login now                           
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection