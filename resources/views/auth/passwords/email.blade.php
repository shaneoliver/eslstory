@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="w-md-50 mx-md-auto">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>

            <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Back to log in') }}</a>
        </div>
    @else
        <!-- Form -->
        <form class="w-md-50 mx-md-auto" method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Title -->
            <div class="mb-7">
                <h1 class="h3 text-primary font-weight-normal mb-0">Forgot your <span class="font-weight-semi-bold">password?</span></h1>
                <p>{{ __('Enter your email address below and we\'ll get you back on track.') }}</p>
            </div>
            <!-- End Title -->

            <div class="form-group">
                <label for="email" class="">{{ __('E-Mail Address') }}</label>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email address') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <!-- Button -->
            <div class="row align-items-center mb-5">
                <div class="col-4 col-sm-6">
                    <a class="text-muted" href="{{ route('login') }}">{{ __('Back to log in') }}</a>
                </div>

                <div class="col-8 col-sm-6 text-right">
                    <button type="submit" class="btn btn-primary transition-3d-hover">{{ __('Send Password Reset Link') }}</button>
                </div>
            </div>
            <!-- End Button -->
        </form>
        <!-- End Form -->
    @endif
@endsection