@extends('layouts.Login')

@section('content')
    <div class="form-bg">
        <div class="hero-form-container" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <h3 class="title"><i class="far fa-caret-square-right"></i> Login</h3>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="check-label">Ingat Saya!</label>
                                @if (Route::has('password.request'))
                                    <label class="check-label-password-request"><a href="{{ route('password.request') }}">Lupa Password!</a></label>
                                @endif
                            </div>
                            <button type="submit" class="btn signup">MASUK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
