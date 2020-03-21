@extends('layouts.app')

@section('content')



<form method="POST" action="{{ route('admin.users.store') }}">
    @csrf
   
    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="mb-0">Crear usuario</h5>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <div class="form-group form-group-feedback form-group-feedback-right">

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
        
                        <div class="form-control-feedback">
                            <i class="icon-user-plus text-muted"></i>
                        </div>
        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group form-group-feedback form-group-feedback-right">
                        
                        <select class="form-control" name="role" aria-placeholder="Seleccionar Rol">
                            <option value="" disabled selected>Seleccionar un rol</option>

                            @forelse($roles as $role)

                                <option value="{{ $role->id }}" {{ old('role') == $role->id ? "selected" : "" }}>{{ $role->name }}</option>

                            @empty

                            @endforelse
                        </select>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

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
                        <input id="password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repite la contraseña">
                        <div class="form-control-feedback">
                            <i class="icon-user-lock text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electronico">

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
                        <input type="email" class="form-control" placeholder="Repite el correo electronico" required name="email_confirmation">
                        <div class="form-control-feedback">
                            <i class="icon-mention text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Crear usuario</button>

        </div>
    </div>
    
</form>
<!-- /registration form -->

    
@endsection