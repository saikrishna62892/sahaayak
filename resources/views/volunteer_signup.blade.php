@extends('layouts.reg_forms_layout')

	@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-30">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-25">
						SignUp : Step 2
					</span>
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="name" placeholder="Full Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>
					Note: Please Provide 10 digit number.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="tel" name="phone" placeholder="Phone" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-phone"></span>
						</span>
					</div>
					Note: Please Provide Highest degree.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="qualification" placeholder="Qualification" required>
						<span class="focus-input100" ></span>
						<span class="symbol-input100">
							<span class="lnr lnr-layers"></span>
						</span>
					</div>
					Note: Please Provide Your Job Details.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="work" placeholder="Working in" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-cog"></span>
						</span>
					</div>
					Note: Insight about becoming a Volunteer.
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="insight" placeholder="Insight" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-pencil"></span>
						</span>
					</div>
					Note: Any Questions for us?
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="queries" placeholder="Queries">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-printer"></span>
						</span>
					</div>
  					Note: Provide any identification prooof.
					<div class="custom-file mb-3">
      					<input type="file" class="custom-file-input" id="customFile" name="filename">
					    <label class="custom-file-label" for="customFile">Aadhar/Driving License..etc</label>
					</div>
					Note: Provide any Working-id prooof.
					<div class="custom-file mb-3">
      					<input type="file" class="custom-file-input" id="customFile" name="filename">
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
	@endsection