@extends('layouts.layout')
@section('content')
<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <h1 style="color: #fff;">{{$questionnaire->questionnaireTitle}}</h1>
                    </div>
                    <p style="color: #fff;">Slide down to complete the survey and submit it to get your assessment score</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="/home/questionnaires/{{$questionnaire->id}}/getResult" method="post">
                @csrf
            @foreach($questionnaire->questions as $key => $question)
            <div class="card mt-4 shadow p-4 mb-5 bg-white rounded" >
                <div class="card-header">{{$key+1}}) {{$question->question}}</div>
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
            <center><button class="btn btn-dark" type="submit" style="background-color: #5768ad;">complete survey</button></center>
            </form>
        </div>
    </div>
</div>
@endsection