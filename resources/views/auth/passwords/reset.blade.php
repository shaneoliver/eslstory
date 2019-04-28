@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('password.update') }}" class="w-md-50 mx-md-auto">
        @csrf

        <!-- Title -->
        <div class="mb-7">
            <h1 class="h3 text-primary font-weight-normal mb-0">Reset your <span class="font-weight-semi-bold">password?</span></h1>
            <p>{{ __('Enter your email address and new password below.') }}</p>
        </div>
        <!-- End Title -->

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <label for="email" class="">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email address') }}">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm password') }}">
        </div>

        <div class="form-group">
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary mr-4">
                    {{ __('Reset Password') }}
                </button>
                <a href="{{ route('login') }}" class="text-muted">{{ __('Return to login') }}</a>
            </div>
        </div>
    </form>

@endsection
