

	<?php $__env->startSection('content'); ?>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-45 p-b-30">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-25">
						SignUp : Step 1
					</span>
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div>
						Role&emsp;
                                <label class="radio-container m-r-20">
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>User
                                </label>
                                <label class="radio-container">
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>Volunteer
                                </label>
					</div>
					
					<div class="container-login100-form-btn p-t-12">
						<button class="login100-form-btn">
							SignUp
						</button>
					</div>

					<div class="text-center w-full p-t-12 p-b-12">
						<span class="txt1">
							Or Signup with
						</span>
					</div>

					<a href="#" class="btn-face m-b-10">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-10">
						<img src="img/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>

					<div class="text-center w-full p-t-4">
						<span class="txt1">
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
	<?php $__env->stopSection(); ?>
	
	

	

<?php echo $__env->make('layouts.forms.reg_forms_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\G.SAI KRISHNA\Desktop\sahaayak\resources\views/joinus.blade.php ENDPATH**/ ?>