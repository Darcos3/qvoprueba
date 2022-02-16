@extends('layouts.app')

@section('content')
    <div class="col-md-4 offset-4">
        <div class="card p-3">
            <div class="card-header">{{ __('Login') }}</div>
    
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
    
                    <div class="row mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
    
                    <div class="row mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
    
                    <div class="row mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recordar mis datos') }}
                            </label>
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <button type="submit" class="btn btn-success btn-block">
                            {{ __('Login') }}
                        </button>

                        <a href="{{ route('register') }}" class="btn btn-secondary btn-block">
                            {{ __('Register') }}
                        </a>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link btn-block" href="{{ route('password.request') }}">
                                {{ __('¿Has olvidado tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <div class="text-right mt-3">
            <small>Daniel Arcos / Prueba QVO</small>
        </div>
    </div>
@endsection
