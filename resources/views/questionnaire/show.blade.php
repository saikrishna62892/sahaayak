@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">{{$questionnaire->questionnaireTitle}}</div>

        <div class="card-body">
           <a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create" class="btn btn-dark">Add new Question</a>
          <a href="/admin/home/questionnaires/{{$questionnaire->id}}/complete" class="btn btn-dark">complete</a>
        </div>
    </div>
@endsection