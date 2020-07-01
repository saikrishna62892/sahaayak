@extends('layouts.dashboard')
@section('content')
            <div class="card">
                <div class="card-header">Edit Questionnaire</div>

                <div class="card-body">
                   <form action="/admin/home/questionnaires/{{$questionnaire->id}}" method="post">
                    @method('PATCH')
                    @include('questionnaire.questionnaire')
                        <button  type="submit" class="btn btn-primary">save questionnaire</button>
                   </form>
                </div>
            </div>
@endsection