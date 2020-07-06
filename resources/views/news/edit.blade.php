@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        &emsp;
        <h4 align="center">Edit News article</h4>

        <div class="card-body">
           <form action="/admin/home/news/{{$newsarticle->id}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            @include('news.news')
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Edit News article</button></center>
           </form>
        </div>
    </div>
</div>
@endsection