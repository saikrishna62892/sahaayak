@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
    	&emsp;
        <h4 align="center">{{$questionnaire->questionnaireTitle}}</h4>

        <div class="main-content-inner" id="table">
		    <div class="single-table">
		        <div class="table-responsive">
		            <table class="table table-hover progress-table text-center">
		                <thead class="text-uppercase">
		                    <tr>
		                        <th scope="col">S.No</th>
		                        <th scope="col">Question</th>
		                        <th scope="col">Created_at</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <?php $count=1 ?>
		                    @forelse($questionnaire->questions as $question)
		                    <tr>
		                        <td scope="row">{{ $count++ }}</td>
		                        <td>{{$question->question}}</td>
		                        <td>{{$question->created_at}}</td>
		                    </tr>
		        			@empty
					        <h5>No Questions available..</h5>
					        @endforelse
		                </tbody>
		            </table>
		        </div>
		    </div>
		</div>
        <div class="card-body">
           <center><a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create" class="btn primary-btn" style="background-color: #5768ad;color: #fff;">Add new Question</a>&emsp;
           <a href="/admin/home/questionnaires/{{$questionnaire->id}}/complete" class="btn primary-btn" style="background-color: #5768ad;color: #fff;">Complete Questionnaire</a></center>
        </div>
    </div>
</div>
@endsection