@extends('layouts.dashboard')


@section('name')
    {{$counsellor->name}} details
@endsection

@section('content')
<br>
<div class="container col-lg-8">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-header"><h3 align="center">{{$counsellor->name}} details</h3></div>
        <div class="row">
            <div class="card-body" style="width: 60%;">
                <div class="form-group">
                    <label for="name"><strong>Name : </strong></label>
                    {{$counsellor->name}}
                </div>
                <div class="form-group">
                    <label for="name"><strong>College ID : </strong></label>
                    <a href="tel:{{$counsellor->phone}}" style="color: #000;"> {{$counsellor->college_id}}</a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Email : </strong></label>
                    <a href="mailto:{{$counsellor->email}}" style="color: #000;"><u>{{$counsellor->email}}</u></a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Google Calendar URL : </strong></label>
                    <a href="mailto:{{$counsellor->calendar_url}}" style="color: #000;"><u>{{$counsellor->calendar_url}}</u></a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Profession : </strong></label>
                    {{$counsellor->profession}}
                </div>
                <div class="form-group">
                    <label for="name"><strong>Bio : </strong></label>
                    {{$counsellor->bio}}
                </div>
                <div class="form-group">
                    <label for="name"><strong>Achievements : </strong></label>
                    {{$counsellor->achievements}}
                </div>
    		</div>
            <div class="card-body" style="width: 40%;">
                <div align="right">
                    <a href="/admin/home/counsellor/{{$counsellor->id}}/editDetails" style="color: #5768ad;">Edit Details</a>&emsp;
                </div>
                <br>
                <div class="form-group">
                    <img style="float: right;" src="{{ asset('/img/counsellors/'.$counsellor->image) }}" width="100" height="100">
                </div>
            </div>
        </div>
            <div align="right">
                    <a href="/admin/home" style="color: #5768ad;">Return to Dashboard</a>&emsp;
            </div>
    	</div>
    </div>
@endsection
