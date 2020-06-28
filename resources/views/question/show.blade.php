@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="/home/questionnaires/{{$questionnaire->id}}/getResult" method="post">
                @csrf
            <div class="card">
                <div class="card-header">{{$questionnaire->questionnaireTitle}}</div>

                <div class="card-body">
                   
                </div>
            </div>

            @foreach($questionnaire->questions as $key => $question)
            <div class="card mt-4" >
                <div class="card-header">{{$key+1}} {{$question->question}}</div>
                    <div class="card-body">
                        @error('responses'.$key.'answer_id')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <ul class="list-group">
                        @foreach($question->answers as $answer)
                        <label for="answer{{$answer->id}}">
                            <li class="list-group-item">
                                <input type="radio" name="response[{{$key}}][answer_id]" id="answer{{$answer->id}}" 
                                {{ (old('response.'.$key.'.answer_id') ==  $answer->id) ? 'checked':''}}
                                 class="mr-2" value="{{$answer->id}}">
                                </input>
                                {{$answer->answer}}
                    <input type="hidden" name="response[{{$key}}][question_id]" id="answer{{$question->id}}"></input>
                            </li>
                        </label>
                        @endforeach
                        </ul>
                    </div>
            </div>
            @endforeach
            <button class="btn btn-dark" type="submit">complete survey</button>
            </form>
        </div>
    </div>
</div>
@endsection