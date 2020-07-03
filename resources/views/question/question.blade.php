<div class="card">
    <div class="card-body">
        <form action="/admin/home/questionnaires/{{ $questionnaire->id }}/questions" method="post">
            @csrf
            <div class="form-group">
                <label for="question">Please enter the question</label>
                <input type="text" class="form-control" name="question[question]" id="question" 
                value="{{ old('question.question') ?? $question->question }}" aria-describedby="questionHelp" placeholder="Your question here...">
                @error('question.question')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <fieldset>
                    <legend>Choices</legend>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="answers[][answer]"id="answer1" aria-describedby="choiceHelp" value="{{ old('answers.0.answer') ?? $answers[0]->answer}}"placeholder="Enter choice 1">
                            @error('answers.0.answer')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="number" class="form-control" name="answers[0][point]"id="point" aria-describedby="choiceHelp" value="{{ old('answers.0.point') ?? $answers[0]->point}}" placeholder="Enter points (0 to 1)" min="0" max="1" step="0.25">
                            @error('answers.0.point')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="answers[][answer]"id="answer2" aria-describedby="choiceHelp" value="{{ old('answers.1.answer') ?? $answers[1]->answer}}" placeholder="Enter choice 2">
                            @error('answers.1.answer')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="number" class="form-control" name="answers[1][point]"id="point" aria-describedby="choiceHelp" value="{{ old('answers.1.point') ??  $answers[1]->point}}" placeholder="Enter points (0 to 1)"  min="0" max="1" step="0.25">
                            @error('answers.1.point')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="answers[][answer]"id="answer3" aria-describedby="choiceHelp" value="{{ old('answers.2.answer') ?? $answers[2]->answer}}" placeholder="Enter choice 3">
                            @error('answers.2.answer')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="number" class="form-control" name="answers[2][point]"id="point" aria-describedby="choiceHelp" value="{{ old('answers.2.point') ?? $answers[2]->point}}" placeholder="Enter points (0 to 1)"  min="0" max="1" step="0.25">
                            @error('answers.2.point')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" name="answers[][answer]"id="answer4" aria-describedby="choiceHelp" value="{{ old('answers.3.answer') ?? $answers[3]->answer}}" placeholder="Enter choice 4">
                            @error('answers.3.answer')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="number" class="form-control" name="answers[3][point]"id="point" aria-describedby="choiceHelp" value="{{ old('answers.3.point') ?? $answers[3]->point}}" placeholder="Enter points (0 to 1)"  min="0" max="1" step="0.25">
                            @error('answers.3.point')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </fieldset>
            </div>
            <center><button  type="submit" class="btn btn-primary" style="background-color: #5768ad;">Save Question</button></center>
        </form>
    </div>
</div>