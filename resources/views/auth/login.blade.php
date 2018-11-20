@extends('layouts.app')

@section('content')
<div class="register-login">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5 mt-5">
                <h1 class="mb-3 mt-5 text-white">ERDLes</h1>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group">
                                <label for="email">{{ __('Alamat Email') }}</label>
    
                                <div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                    
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="password">{{ __('Kata sandi') }}</label>
    
                                <div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    </div>
                                    
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat aku') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group mb-0">
                                <div class="">
                                    <button type="submit" class="btn btn-pink">
                                        {{ __('Masuk') }}
                                    </button>
    
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa kata sandi?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
