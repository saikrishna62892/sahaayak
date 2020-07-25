@extends('layouts.dashboard')


@section('name')
    {{$unapprovedVolunteer->name}} details
@endsection

@section('content')
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <div class="card-header"><h3 align="center">{{$unapprovedVolunteer->name}} details</h3></div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name"><strong>Name : </strong></label>
                    {{$unapprovedVolunteer->name}}
                </div>
                <div class="form-group">
                    <label for="name"><strong>Phone : </strong></label>
                    <a href="tel:{{$unapprovedVolunteer->phone}}" style="color: #000;"> {{$unapprovedVolunteer->phone}}</a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Email : </strong></label>
                    <a href="mailto:{{$unapprovedVolunteer->user->email}}" style="color: #000;">{{$unapprovedVolunteer->user->email}}</a>
                </div>
                <div class="form-group">
                    <label for="name"><strong>Qualification : </strong></label>
                    {{$unapprovedVolunteer->qualification}}
                </div>
                <div class="form-group">
                    <label for="name"><strong>work : </strong></label>
                    {{$unapprovedVolunteer->work}}
                </div>
                <div class="form-group">
                    <label for="name"><strong>Insight : </strong></label>
                    {{$unapprovedVolunteer->insight}}
                </div>
                <div class="form-group">
                    <label for="name"><strong>Queries : </strong></label>
                    {{$unapprovedVolunteer->queries}}
                </div>
                <div class="form-group">
                    <label for="name"><strong>Identity : </strong></label>
                    <img src="{{\Storage::disk('s3')->url($unapprovedVolunteer->file1)}}">
                </div>
                <div class="form-group">
                    <label for="name"><strong>Work Identity : </strong></label>
                    <img src="{{\Storage::disk('s3')->url($unapprovedVolunteer->file2)}}">
                </div>
                <div align="right">
                    <a href="/admin/home" style="color: #5768ad;">Return to Dashboard</a>&emsp;
                </div>
    		</div>
    	</div>
    </div>
@endsection
