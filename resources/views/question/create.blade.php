@extends('layouts.dashboard')
@section('content')

            <div class="card">
                <div class="card-header">New Question</div>

                <div class="card-body">
                   <form action="/admin/home/questionnaires/{{ $questionnaire->id }}/questions" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question[question]" id="question" 
                        value="{{ old('question.question') }}" aria-describedby="questionHelp" placeholder="Enter Question">
                        <small id="questionHelp" class="form-text text-muted">enter the question.</small>
                        @error('question.question')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <fieldset>
                            <legend>Choices</legend>
                            <small id="choicesHelp" class="form-text text-muted">enter the choices.</small>

                        <div>
                                <div class="form-group">
                        <label for="answer1">choice 1</label>
                        <input type="text" class="form-control" name="answers[][answer]"id="answer1" aria-describedby="choiceHelp" value="{{ old('answers.0.answer') }}"placeholder="Enter choice 1">
                        <small id="choicesHelp" class="form-text text-muted">enter choice 1</small>
                        @error('answers.0.answer')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="point">point 1</label>
                        <input type="number" class="form-control" name="answers[0][point]"id="point" aria-describedby="choiceHelp" value="{{ old('answers.0.point') }}" placeholder="Enter points">
                        <small id="choicesHelp" class="form-text text-muted">points</small>
                        @error('answers.0.point')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="answer2">choice 2</label>
                        <input type="text" class="form-control" name="answers[][answer]"id="answer2" aria-describedby="choiceHelp" value="{{ old('answers.1.answer') }}" placeholder="Enter choice 2">
                        <small id="choicesHelp" class="form-text text-muted">enter choice 2</small>
                        @error('answers.1.answer')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="point">point 2</label>
                        <input type="number" class="form-control" name="answers[1][point]"id="point" aria-describedby="choiceHelp" value="{{ old('answers.1.point') }}" placeholder="Enter points">
                        <small id="choicesHelp" class="form-text text-muted">points</small>
                        @error('answers.1.point')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="answer3">choice 3</label>
                        <input type="text" class="form-control" name="answers[][answer]"id="answer3" aria-describedby="choiceHelp" value="{{ old('answers.2.answer') }}" placeholder="Enter choice 3">
                        <small id="choicesHelp" class="form-text text-muted">enter choice 3</small>
                        @error('answers.2.answer')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="point">point 3</label>
                        <input type="number" class="form-control" name="answers[2][point]"id="point" aria-describedby="choiceHelp" value="{{ old('answers.2.point') }}" placeholder="Enter points">
                        <small id="choicesHelp" class="form-text text-muted">points</small>
                        @error('answers.2.point')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="answer4">choice 4</label>
                        <input type="text" class="form-control" name="answers[][answer]"id="answer4" aria-describedby="choiceHelp" value="{{ old('answers.3.answer') }}" placeholder="Enter choice 1">
                        <small id="choicesHelp" class="form-text text-muted">enter choice 4</small>
                        @error('answers.3.answer')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                        </div>

                        <div>
                                <div class="form-group">
                        <label for="point">point 4</label>
                        <input type="number" class="form-control" name="answers[3][point]"id="point" aria-describedby="choiceHelp" value="{{ old('answers.3.point') }}" placeholder="Enter points">
                        <small id="choicesHelp" class="form-text text-muted">points</small>
                        @error('answers.3.point')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                        </div>


                        </fieldset>
                    </div>
                    
                        <button  type="submit" class="btn btn-primary">save question</button>
                    
                   </form>
                </div>
            </div>
@endsection