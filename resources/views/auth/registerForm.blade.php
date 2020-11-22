    <div class="wrap-input100 validate-input m-b-16">
        <input class="input100" type="text" id="name" name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus placeholder="Full Name">
        @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
        @enderror
        @csrf
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <span class="lnr lnr-user"></span>
        </span>
    </div>
    <div class="wrap-input100 validate-input m-b-16">
        <input class="input100" type="text" id="rollnum" name="rollnum" value="{{ old('rollnum') ?? $user->rollnum }}" required autocomplete="rollnum" autofocus placeholder="Roll Number/Employee ID">
        @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
        @enderror
        @csrf
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <span class="lnr lnr-license"></span>
        </span>
    </div>
    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@nitc.ac.in">
        <input class="input100" id="email" type="email" name="email" value="{{ old('email') ?? $user->email }}" required autocomplete="email" placeholder="NITC Mail" pattern=".+@nitc.ac.in">
        @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
        @enderror
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <span class="lnr lnr-envelope"></span>
        </span>
    </div>