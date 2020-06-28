@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Available Questionnaires</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @foreach($questionnaires as $questionnaire)
                    <div>
                    <a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create">{{$questionnaire->questionnaireTitle}}</a>
                    </div>
                    @endforeach
                    
                    <div>
                        <a href="/admin/home/questionnaires/create" class="btn btn-dark">create new questionnaire</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Add Videos</div>

                <div class="card-body">
                    <div>
                        <a href="/admin/home/videos/create" class="btn btn-dark">Add New Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
