@extends('layouts.reg_forms_layout')
@section('content')
<br>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-30">
            <a style="color: #5768ad;float: right;" href="{{ url('/') }}" class="primary-btn">Home</a>
           <form action="/user/home/edit/{{Auth::user()->id}}/updateDetails" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            @include('auth.registerForm')
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Submit</button></center>
           </form>
        </div>
    </div>
</div>
@endsection