@extends('layouts.app')

@section('content')
    <div class="login">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-6 col-md-6 col-lg-6">
                    <img src="{{ asset('assets/img/home-jumbo.png') }}" alt="" class="login__image">
                </div>

                <div class="col-6 col-md-6 col-lg-6">
                    <div class="login__container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <label for="email" class="form-label login__label">{{ __('Email Address') }}</label>
                            <div>
                                <input id="email" type="email"
                                    class="form-control login__input @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="password" class="form-label login__label">{{ __('Password') }}</label>
                            <div>
                                <input id="password" type="password"
                                    class="form-control login__input @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input login__check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label login__check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-md-8">
                                    <button type="submit" class="btn login__btn">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn login__link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
