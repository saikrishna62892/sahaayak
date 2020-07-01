@extends('layouts.dashboard')
@section('content')

            <div class="card">
                <div class="card-header">New Question</div>

                <div class="card-body">
                   <form action="/admin/home/questionnaires/{{ $questionnaire->id }}/questions" method="post">
                    @include('question.question')
                   </form>
                </div>
            </div>
@endsection