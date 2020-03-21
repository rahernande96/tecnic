@extends('layouts.auth')

@section('content')
<!-- Registration form -->

<form class="flex-fill" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">Create account</h5>
                        <span class="d-block text-muted">All fields are required</span>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-right">

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Tu nombre">

                        <div class="form-control-feedback">
                            <i class="icon-user-plus text-muted"></i>
                        </div>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Tu contraseña">

                                <div class="form-control-feedback">
                                    <i class="icon-user-lock text-muted"></i>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input id="password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repite tu contraseña">
                                <div class="form-control-feedback">
                                    <i class="icon-user-lock text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Tu correo electronico">

                                <div class="form-control-feedback">
                                    <i class="icon-mention text-muted"></i>
                                </div>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="email" class="form-control" placeholder="Repite tu correo electronico" required name="email_confirmation">
                                <div class="form-control-feedback">
                                    <i class="icon-mention text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-input-styled" data-fouc>
                                Accept <a href="#">terms of service</a>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button>
                    
                    <div class="form-group text-center text-muted content-divider">
                        <span class="px-2">You have an account?</span>
                    </div>
        
                    <div class="form-group">
                        
                        <a href="{{ route('login') }}" class="btn btn-light btn-block">Sign in</a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- /registration form -->
@endsection
