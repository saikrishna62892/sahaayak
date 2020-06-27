@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Video</div>

                <div class="card-body">
                   <form action="/admin/home/videos" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="videoSource">VideoSource</label>
                        <input type="text" class="form-control" name="videoSource" id="videoSource" aria-describedby="videoSourceHelp" placeholder="Enter Video Source">
                        <small id="videoSourceHelp" class="form-text text-muted">enter source of video.</small>
                        @error('videoSource')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="videoTag">Video Tag</label>
                        <input type="text" class="form-control" name="videoTag" id="videoTag" aria-describedby="videoTagHelp" placeholder="Enter Video Tag">
                        <small id="videoTagHelp" class="form-text text-muted">enter video tag.</small>
                        @error('videoTag')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="videoURL">Video URL</label>
                        <input type="text" class="form-control" name="videoURL" id="videoURL" aria-describedby="videoURLHelp" placeholder="Enter Video URL">
                        <small id="videoURLHelp" class="form-text text-muted">enter video url.</small>
                        @error('videoURL')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                        <button  type="submit" class="btn btn-primary">Add Video</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection