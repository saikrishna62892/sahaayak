<div class="form-group">
    <label for="questionnaireTitle">Title</label>
    <input type="text" class="form-control" name="questionnaireTitle" id="questionnaireTitle" aria-describedby="titleHelp" placeholder="Enter title" value="{{ old('questionnaireTitle') ?? $questionnaire->questionnaireTitle }}">
    <small id="titleHelp" class="form-text text-muted">enter title of questionnaire.</small>
    @error('questionnaireTitle')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="questionnairePurpose">Purpose</label>
    <input type="text" class="form-control" name="questionnairePurpose" id="questionnairePurpose" aria-describedby="purposeHelp" placeholder="Enter purpose" value="{{ old('questionnairePurpose') ?? $questionnaire->questionnairePurpose }}">
    <small id="purposeHelp" class="form-text text-muted">enter purpose</small>
    @error('questionnairePurpose')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
@csrf
