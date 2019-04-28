@extends('layouts.app')

@section('content')
    <!-- Form -->
    <form class="js-validate w-md-50 mx-md-auto" method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Title -->
        <div class="mb-7">
            <h2 class="h3 text-primary font-weight-normal mb-0">Welcome <span class="font-weight-semi-bold">back</span></h2>
            <p>{{ __('Login to get started.') }}</p>
        </div>
        <!-- End Title -->

        <!-- Form Group -->
        <div class="form-group">
            <label class="form-label" for="email">{{ __('Email address') }}</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="{{ __('Email address') }}" aria-label="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="form-group">
            <label class="form-label" for="password">
                <span class="d-flex justify-content-between align-items-center">
                    {{ __('Password') }}
                    @if (Route::has('password.request'))
                        <a class="text-muted text-capitalize font-weight-normal" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </span>
            </label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="{{ __('Password') }}" aria-label="Password" value="{{ old('password') }}" required autocomplete="password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <!-- End Form Group -->

        <div class="form-group">
            <div class="custom-control custom-checkbox custom-control-inline">
                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="custom-control-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <!-- Button -->
        <div class="row align-items-center mb-5">
            <div class="col-6">
                <span class="small text-muted">{{ __('Don\'t have an account?') }}</span>
                <a class="small" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>

            <div class="col-6 text-right">
                <button type="submit" class="btn btn-primary transition-3d-hover">{{ __('Login') }}</button>
            </div>
        </div>
        <!-- End Button -->
    </form>
    <!-- End Form -->
@endsection