@extends('layouts.app')

@section('content')
    <!-- Form -->
    <form class="w-md-50 mx-md-auto"method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Title -->
        <div class="mb-7">
            <h1 class="h3 text-primary font-weight-normal mb-0">Welcome to <span class="font-weight-semi-bold">ESL Story</span></h1>
            <p>{{ __('Fill out the registration form to get started.') }}</p>
        </div>
        <!-- End Title -->

        <div class="form-group">
            <label for="name" class="">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email address') }}">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

            <div class="">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm password') }}">
            </div>
        </div>

        <!-- Button -->
        <div class="row align-items-center mb-5">
            <div class="col-5 col-sm-6">
                <span class="small text-muted">{{ __('Already have an account?') }}</span>
                <a class="small" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>

            <div class="col-7 col-sm-6 text-right">
                <button type="submit" class="btn btn-primary transition-3d-hover">{{ __('Register') }}</button>
            </div>
        </div>
        <!-- End Button -->
    </form>
    <!-- End Form -->
@endsection