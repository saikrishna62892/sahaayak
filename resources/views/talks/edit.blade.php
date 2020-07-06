@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        &emsp;
        <h4 align="center">Edit Talks</h4>

        <div class="card-body">
           <form action="/admin/home/edittalks/{{$talk->id}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            @include('talks.talk')
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Edit Talk</button></center>
           </form>
        </div>
    </div>
</div>
@endsection