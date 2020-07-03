@extends('layouts.dashboard')
@section('content')
	<br>
	<div class="container">
	    <div class="card">
	        <div class="card-body">
	        	<?php $question_count = App\Question::where('questionnaire_id',$questionnaire->id)->get() ?>
	        	<h4>Question #{{ $question_count->count()+1 }}</h4>
	            @include('question.question')
	        </div>
	    </div>
	</div>
@endsection