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
<div class="password-reset-panel">
    <div class="password-reset-white-panel">
        <div class="password-reset-show">
            <h2>Reset Password</h2>
            <!-- Email Success Modal Confirmation -->
            @if (session('status'))
            <script>
                $("#emailModal").modal("show");
            </script>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <!-- Email -->
                <div class="mb-4 mt-4">
				<input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <!-- Send Email Button -->
				<input type="submit" value="Send">
            </form>
        </div>
    </div>
</div>
@endsection
