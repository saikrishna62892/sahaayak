@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="card shadow p-4 mb-5 bg-white rounded">
        <h4 align="center">Available Questions in <a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create" style="color: #5768ad;">{{$questionnaire->questionnaireTitle}}</a></h4>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                {{ session('status') }}
                </div>
                @endif

                <div class="main-content-inner" id="table">
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">created_at</th>
                                        <th scope="col">modified_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1 ?>
                                    @forelse($questionnaire->questions as  $question)
                                    <tr>
                                        <td scope="row">{{ $count++ }}</td>
                                        <td>{{$question->question}}</td>
                                        <td>
                                            <a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/{{$question->id}}/edit"  style="color: #5768ad;">Edit </a>
                                        </td>
                                        <td>
                                            <form action="/admin/home/questionnaires/{{$questionnaire->id}}/questions/{{$question->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button style="color: #5768ad;background:none!important;border:none;">Delete</button>
                                            </form>
                                        </td>
                                        <td>{{ Carbon\Carbon::parse($question->created_at)->format('d-M-Y g:h:i:s A') }}</td>
                                        <td>{{ Carbon\Carbon::parse($question->updated_at)->format('d-M-Y g:h:i:s A') }}</td>
                                    </tr>
                                    @empty
                                    <h5>No Questions available..</h5>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div>
                    <center><a href="/admin/home/" class="btn btn-primary" style="background-color: #5768ad;">Return to Dashboard</a></center>
                </div>
        </div>
    </div>
</div>
@endsection