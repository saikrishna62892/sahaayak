@extends('layouts.dashboard')


@section('name')
    Edit details
@endsection

@section('content')
<div class="card shadow p-4 mb-5 bg-white rounded">

    <h4 align="center">Mail To {{ $appointment->faculty_advisor }}</h4>
    <div class="card-body">
       <form action="/counsellor/mailToFA" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="form-group  col-lg-12" style="display: none;">
                    <input type="text" class="form-control" name="appointment_id" id="appointment_id" aria-describedby="appoinment_idHelp" value="{{ $appointment->id }}" placeholder="Your FA Email here...">
                    @error('appointment_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group  col-lg-12">
                    <label for="fa_email">Enter {{ $appointment->faculty_advisor }} Email</label>
                    <input type="text" class="form-control" name="fa_email" id="fa_email" aria-describedby="fa_emailHelp" value="" placeholder="{{ $appointment->faculty_advisor }} Email here..." required>
                    @error('fa_email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group  col-lg-12">
                    <label for="subject">Please Enter Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" aria-describedby="subjectHelp" placeholder="Your Subject here..." required>
                    @error('subject')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group col-lg-12">
                    <label for="description">Please enter description about {{ $appointment->name}}</label>
                    <textarea type="textarea" class="form-control" name="description" id="description" placeholder="Your description here..." rows="5" required></textarea>
                    @error('description')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="custom-file form-group col-lg-12">
                    <input type="file" class="custom-file-input" id="customFile" name="attachment" >
                    <label class="custom-file-label" for="customFile">Please Enter Attachment(Optional)</label>
                    @error('attachment')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <br>
            <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Mail to FA</button></center>
       </form>
    </div>
</div>
@endsection