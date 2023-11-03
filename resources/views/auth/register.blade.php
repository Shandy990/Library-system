@extends('layouts.app')

@section('content')
    <div class="register">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center">
                    <h1 class="register__title-mobile">{{ __('Register') }}</h1>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="{{ asset('assets/img/register.png') }}" alt="" class="register__image">
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <h1 class="register__title text-center">{{ __('Register') }}</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <label for="name" class="register__label">{{ __('Name') }}</label>
                        <div>
                            <input id="name" type="text"
                                class="form-control register__input @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="email" class="register__label">{{ __('Email Address') }}</label>
                        <div>
                            <input id="email" type="email"
                                class="form-control register__input @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="password" class="register__label">{{ __('Password') }}</label>

                        <div>
                            <input id="password" type="password"
                                class="form-control register__input @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="password-confirm" class="register__label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control register__input"
                            name="password_confirmation" required autocomplete="new-password">

                        <div class="col-md-6">
                            <button type="submit" class="btn register__btn">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
