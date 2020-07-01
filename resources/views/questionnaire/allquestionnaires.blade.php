<div class="card">
    <div class="card-header">Available Questionnaires</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
            @endif
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questionnaires as $questionnaire)
                    <tr>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--
            @foreach($questionnaires as $questionnaire)
            <div>
                <a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/create">{{$questionnaire->questionnaireTitle}}</a>
            </div>
            @endforeach
            -->      
            <div>
                <a href="/admin/home/questionnaires/create" class="btn btn-dark">create new questionnaire</a>
            </div>
    </div>
</div>