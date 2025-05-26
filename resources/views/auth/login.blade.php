<!DOCTYPE html>
<html>
<head>
    <title>Logowanie</title>
</head>
<body>
    @extends('layouts.guest')
    @section('title', 'Logowanie')
    @section('content')
        <h2 class="card-title mb-4">Logowanie</h2>

        @if (session('status'))
            <div class="alert alert-success mb-4">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
            </div>

            <div class="d-flex justify-content-end align-items-center">
                @if (Route::has('password.request'))
                    <a class="text-muted text-decoration-underline me-3" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button type="submit" class="btn btn-primary">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    @endsection
</body>
</html>
