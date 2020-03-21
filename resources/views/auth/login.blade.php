@extends('layouts.auth')

@section('content')
<!-- Login form -->
<form class="login-form"method="POST" action="{{ route('login') }}"">
    @csrf
    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="mb-0">Login to your account</h5>
                <span class="d-block text-muted">Your credentials</span>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">

                
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                <div class="form-control-feedback">
                    <i class="icon-user text-muted"></i>
                </div>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">
                
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                
                <div class="form-control-feedback">
                    <i class="icon-lock2 text-muted"></i>
                </div>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </div>

            <div class="form-group d-flex align-items-center">
                <div class="form-check mb-0">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-input-styled" data-fouc {{ old('remember') ? 'checked' : '' }}>
                        Remember Me
                    </label>
                </div>

                <a href="{{ route('password.request') }}" class="ml-auto">Forgot password?</a>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
            </div>

            <div class="form-group text-center text-muted content-divider">
                <span class="px-2">Don't have an account?</span>
            </div>

            <div class="form-group">
                
                <a href="{{ route('register') }}" class="btn btn-light btn-block">Sign up</a>
            
            </div>
        </div>
    </div>
</form>
<!-- /login form -->
@endsection
