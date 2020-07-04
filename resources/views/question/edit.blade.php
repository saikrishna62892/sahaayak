@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Question</div>
        
        <div class="card-body">
           <form action="/admin/home/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id}}" method="post">
           	@method('PATCH')
            @include('question.question')
           </form>
        </div>
    </div>
</div>
@endsection