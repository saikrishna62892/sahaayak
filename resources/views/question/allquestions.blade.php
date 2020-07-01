<div class="card">
    <div class="card-header">Available Questions for this Questionnaire</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
            @endif
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questionnaire->questions as  $question)
                    <tr>
                        <td>{{ $question->question }}</td>
<td>
    <a href="/admin/home/questionnaires/{{$questionnaire->id}}/questions/{{$question->id}}/edit" class="btn btn-dark">Edit </a>
</td>
<td>
    <form action="/admin/home/questionnaires/{{$questionnaire->id}}/questions/{{$question->id}}" method="post">
        @method('DELETE')
        @csrf
        <button>delete</button>
    </form>
</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>   
            <div>
                <a href="/admin/home/questionnaires/create" class="btn btn-dark">create new questionnaire</a>
            </div>
    </div>
</div>