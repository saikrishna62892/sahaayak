<div class="form-group">
                <label for="formGroupExampleInput">Please enter event title</label>
                <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Your title here..." value="{{ old('title') ?? $event->title }}" autocomplete="off" >
                @csrf
                @error('title')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Please enter event content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10" placeholder="Your content here..."  autocomplete="off" >{{ old('content') ?? $event->content }}</textarea>
                @error('content')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <select class="custom-select" name="category" required>
                    <option value="">Please select category</option>
                    <option value="Depression">Depression</option>
                    <option value="Suicide">Suicide</option>
                    <option value="Stress">Stress</option>
                    <option value="Stigma">Stigma</option>
                    <option value="Healthy Sleep">Healthy Sleep</option>
                    <option value="Mental Illness">Mental Illness</option>
                    <option value="Hopelessness">Hopelessness</option>
                    <option value="Fear of Loss">Fear of Loss</option>
                    <option value="Social Isolation">Social Isolation</option>
                </select>
                @error('category')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>