@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="card">
    	&emsp;
        <h4 align="center">{{$questionnaire->questionnaireTitle}}</h4>

        <div class="card-body">
           <center><a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create" class="btn primary-btn" style="background-color: #5768ad;color: #fff;">Add new Question</a>&emsp;
           <a href="/admin/home" class="btn primary-btn" style="background-color: #5768ad;color: #fff;">Complete Questionnaire</a></center>
        </div>
    </div>
</div>
@endsection