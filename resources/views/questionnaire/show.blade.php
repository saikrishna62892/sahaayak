@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$questionnaire->questionnaireTitle}}</div>

                <div class="card-body">
                   <a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create" class="btn btn-dark">Add new Question</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection