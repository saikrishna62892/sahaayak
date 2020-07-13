@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        &emsp;
        <h4 align="center">Edit Diary event</h4>

        <div class="card-body">
           <form action="/user/home/diaryEvent/{{$event->id}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            @include('diary.diary')
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Edit diary event</button></center>
           </form>
        </div>
    </div>
</div>
@endsection