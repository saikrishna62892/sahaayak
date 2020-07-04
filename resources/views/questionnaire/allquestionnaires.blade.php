
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<div align="right">
    <a href="/admin/home/questionnaires/create" class="btn btn-primary" style="background-color: #5768ad;">create new questionnaire</a>
</div>
<div class="main-content-inner" id="table">
    <h4 class="header-title">Assessments table</h4>
    <div class="single-table">
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                    <tr>
<<<<<<< HEAD
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Complete</th>
=======
                        <th scope="col">S.No</th>
                        <th scope="col">Title/Add Questions</th>
                        <th scope="col">Purpose</th>
                        <th scope="col" colspan="2">Edit</th>
                        <th scope="col">Delete</th>
>>>>>>> 99606f65edbf28c1c41ee298c939666d06c962f7
                    </tr>
                </thead>
                <tbody>
                    <?php $count=1 ?>
                    @foreach($questionnaires as $questionnaire)
                    <tr>
<<<<<<< HEAD
                        <td><a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create">{{$questionnaire->questionnaireTitle}}</a>
                        </td>
                        <td><a href="/admin/home/questionnaires/{{$questionnaire->id}}/edit" class="btn btn-dark">Edit Questionnaire </a></td>
                        <td>
                        <form action="/admin/home/questionnaires/{{$questionnaire->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button>delete</button>
                        </form>
                        </td>
                        <td>
                            <a href="/admin/home/questionnaires/{{$questionnaire->id}}/editQuestions" class="btn btn-dark">Edit Questions</a>
                        </td>
                        <td>
                            <a href="/admin/home/questionnaires/{{$questionnaire->id}}/complete" class="btn btn-dark">complete</a>
                        </td>
=======
                        <td scope="row">{{ $count++ }}</td>
                        <td><a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create" style="color: #5768ad;">{{$questionnaire->questionnaireTitle}}</a></td>
                        <td>{{$questionnaire->questionnairePurpose}}</td>
                        <td><a href="/admin/home/questionnaires/{{$questionnaire->id}}/edit" style="color: #5768ad;">Edit Questionnaire </a></td>
                        <td><a href="/admin/home/questionnaires/{{$questionnaire->id}}/editQuestions" style="color: #5768ad;">Edit Questions</a></td>
                        <td><form action="/admin/home/questionnaires/{{$questionnaire->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button style="color: #5768ad;background:none!important;border:none;">Delete Quesionnaire</button>
                            </form></td>
>>>>>>> 99606f65edbf28c1c41ee298c939666d06c962f7
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>