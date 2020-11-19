@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        &emsp;
        <h4 align="center">Edit {{$counsellor->name}} details</h4>

        <div class="card-body">
           <form action="/admin/home/counsellor/{{$counsellor->id}}/updateDetails" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            @include('counsellors.add')
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Submit</button></center>
           </form>
        </div>
    </div>
</div>
@endsection