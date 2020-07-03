<div class="form-group">
    <label for="questionnaireTitle">Please enter title of the questionnaire</label>
    <input type="text" class="form-control" name="questionnaireTitle" id="questionnaireTitle" aria-describedby="titleHelp" placeholder="Enter title" value="{{ old('questionnaireTitle') ?? $questionnaire->questionnaireTitle }}">
    @error('questionnaireTitle')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="questionnairePurpose">Enter purpose of the questionnaire</label>
    <input type="text" class="form-control" name="questionnairePurpose" id="questionnairePurpose" aria-describedby="purposeHelp" placeholder="Enter purpose" value="{{ old('questionnairePurpose') ?? $questionnaire->questionnairePurpose }}">
    @error('questionnairePurpose')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
@csrf
