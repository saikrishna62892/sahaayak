@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        &emsp;
        <h4 align="center">Edit Questionnaire</h4>

        <div class="card-body">
           <form action="/admin/home/questionnaires/{{$questionnaire->id}}" method="post">
            @method('PATCH')
            @include('questionnaire.questionnaire')
                <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Edit Questionnaire</button></center>
           </form>
        </div>
    </div>
</div>
@endsection