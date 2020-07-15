@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">New Questionnaire</div>

        <div class="card-body">
           <form action="/admin/home/questionnaires" method="post">
            @csrf
            
            @include('questionnaire.questionnaire')
                <button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">save questionnaire</button>
           </form>
        </div>
    </div>
@endsection