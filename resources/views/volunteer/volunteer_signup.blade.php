@extends('layouts.reg_forms_layout')

	@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-30">
				<form class="login100-form validate-form" method="post" action="/register/step2/{{$user->id}}" enctype="multipart/form-data">
					@csrf
					<span class="login100-form-title p-b-25">
						SignUp : Step 2
					</span>
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" required>
						@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>
					Note: Please Provide 10 digit number.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone" required>
						@error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-phone"></span>
						</span>
					</div>
					Note: Please Provide Highest degree.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="qualification" value="{{ old('qualification') }}" placeholder="Qualification" required>
						@error('qualification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
						<span class="focus-input100" ></span>
						<span class="symbol-input100">
							<span class="lnr lnr-layers"></span>
						</span>
					</div>
					Note: Please Provide Your Job Details.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="work" value="{{ old('work') }}" placeholder="Working in" required>
						@error('work')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-cog"></span>
						</span>
					</div>
					Note: Insight about becoming a Volunteer.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="insight" value="{{ old('insight') }}" placeholder="Insight" required>
						@error('insight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-pencil"></span>
						</span>
					</div>
					Note: Any Questions for us?
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="queries" value="{{ old('queries') }}"placeholder="Queries">
						@error('queries')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-printer"></span>
						</span>
					</div>
  					Note: Provide any identification prooof.
					<div class="custom-file mb-3">
      					<input type="file" class="custom-file-input" id="customFile" name="file1" value="{{ old('file1') }}">
      					<div> {{ $errors->first('file1') }} </div>
					    <label class="custom-file-label" for="customFile">Aadhar/Driving License..etc</label>
					</div>
					Note: Provide any Working-id prooof.
					<div class="custom-file mb-3">
      					<input type="file" class="custom-file-input" id="customFile" name="file2" value="{{ old('file2') }}">
      					<div> {{ $errors->first('file2') }} </div>
					    <label class="custom-file-label" for="customFile">Choose file</label>
					</div>
					<div class="container-login100-form-btn p-t-12">
						<button class="login100-form-btn">
							Apply for Verification
						</button>
					</div>
					<div class="text-center w-full p-t-4">
						<span class="txt1">
							<br>
							Already Signed?
						</span>

						<a class="txt1 bo1 hov1" href="#">
							Login now							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<script>
	window.onunload = function(){ {{Auth::logout()}} };
</script>
	@endsection