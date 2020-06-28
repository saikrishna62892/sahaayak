@extends('layouts.dashboard')
@section('content')
            <div class="card">
                <div class="card-header">New Questionnaire</div>

                <div class="card-body">
                   <form action="/admin/home/questionnaires" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="questionnaireTitle">Title</label>
                        <input type="text" class="form-control" name="questionnaireTitle" id="questionnaireTitle" aria-describedby="titleHelp" placeholder="Enter title">
                        <small id="titleHelp" class="form-text text-muted">enter title of questionnaire.</small>
                        @error('questionnaireTitle')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="questionnairePurpose">Purpose</label>
                        <input type="text" class="form-control" name="questionnairePurpose"id="questionnairePurpose" aria-describedby="purposeHelp" placeholder="Enter purpose">
                        <small id="purposeHelp" class="form-text text-muted">enter purpose of questionnaire.</small>
                        @error('questionnairePurpose')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                        <button  type="submit" class="btn btn-primary">save questionnaire</button>
                   </form>
                </div>
            </div>
@endsection