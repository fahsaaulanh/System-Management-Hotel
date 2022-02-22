@extends('layouts.app')

@section('content')
<!-- Animated Background -->
<div class="area" >
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
</ul>
<!-- Login & Register Panel -->
<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Sudah memiliki akun?</h2>
			<p>Masuk sekarang juga!</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Belum memiliki akun?</h2>
			<p>Daftar sekarang juga!</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
            <!-- Login Panel -->
			<div class="login-show">
				<h2>LOGIN</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email -->
				    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror mt-4" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!-- Password -->
				    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!-- Remember Me -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <!-- Login Button -->
				    <input type="submit" value="Login">
                    <!-- Forgot Password -->
				    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
			</div>
            <!-- Register Panel -->
			<div class="register-show">
				<h2>REGISTER</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Username -->
                    <input id="register_name" type="hidden" placeholder="Username" class="form-control @error('register_name') is-invalid @enderror" name="register_name" value="{{ old('register_name') }}" required autocomplete="register_name" autofocus>
                    @error('register_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!-- Email -->
                    <input id="register_email" type="hidden" placeholder="Email"  class="form-control @error('register_email') is-invalid @enderror" name="register_email" value="{{ old('register_email') }}" required autocomplete="register_email">
                    @error('register_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!-- Password -->
                    <input id="register_password" type="hidden" placeholder="Password" class="form-control @error('register_password') is-invalid @enderror" name="register_password" required autocomplete="new-password">
                    @error('register_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!-- Password Confirm -->
				    <input id="password_confirm" type="hidden" placeholder="Confirm Password" class="form-control" name="register_password_confirmation" required autocomplete="new-password">
                    <!-- Register Button -->
				    <input type="submit" value="Register">
                </form>
			</div>
		</div>
	</div>
</div >
@endsection
