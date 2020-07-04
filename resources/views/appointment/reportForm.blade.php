                            <div class="card">
                <div class="card-header">Fill Report Details</div>

                <div class="card-body">
                   <form action="/volunteer/report/generateReport" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="appointment_id">appointment_id</label>
                        <input type="number" class="form-control" name="appointment_id" id="appointment_id" aria-describedby="appointment_idHelp" placeholder="Enter appointment_id" value="" readonly>
                        <small id="appointment_idHelp" class="form-text text-muted">appointment_id</small>
                        @error('appointment_id')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="speed">Speed of talk</label>
                        <input type="number" class="form-control" name="speed" id="speed" aria-describedby="speedHelp" placeholder="enter speed of talk" value="{{ old('speed') }}">
                        <small id="speedHelp" class="form-text text-muted">enter speed of talk</small>
                        @error('speed')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="longPause">long Pause</label>
                        <input type="number" class="form-control" name="longPause" id="longPause" aria-describedby="longPauseHelp" placeholder="Enter long Pause" value="{{ old('longPause') }}">
                        <small id="longPauseHelp" class="form-text text-muted">enter long Pause</small>
                        @error('longPause')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="loudness">loudness</label>
                        <input type="number" class="form-control" name="loudness" id="loudness" aria-describedby="loudnessHelp" placeholder="Enter loudness" value="{{ old('loudness') }}">
                        <small id="loudnessHelp" class="form-text text-muted">enter loudness</small>
                        @error('loudness')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="keywords">keywords</label>
                        <input type="text" class="form-control" name="keywords" id="keywords" aria-describedby="keywordsHelp" placeholder="Enter keywords" value="{{ old('keywords') }}">
                        <small id="keywordsHelp" class="form-text text-muted">enter purpose</small>
                        @error('keywords')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="suggestions">suggestions</label>
                        <textarea class="form-control" name="suggestions" id="suggestions" aria-describedby="suggestionsHelp" placeholder="Enter suggestions" value="{{ old('suggestions') }}"></textarea>
                        <small id="suggestionsHelp" class="form-text text-muted">enter suggestions</small>
                        @error('suggestions')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="remarks">remarks</label>
                        <textarea type="textarea" class="form-control" name="remarks" id="remarks" aria-describedby="remarksHelp" placeholder="Enter remarks" value="{{ old('remarks') }}"></textarea>
                        <small id="remarksHelp" class="form-text text-muted">enter remarks</small>
                        @error('remarks')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        <button  type="submit" class="btn btn-primary">generate report</button>
                   </form>
                </div>
            </div>