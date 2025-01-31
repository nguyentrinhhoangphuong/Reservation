@extends('layouts.frontend.index')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" type="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">Remember Me</label>
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-primary w-100">Log in</button>
            </form>

            <!-- Forgot Password & Register Links -->
            <div class="text-center mt-3">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="custom-link">Forgot your password?</a>
                @endif
                <br>
                <a href="{{ route('register') }}" class="custom-link">Don\'t have an account? Sign up</a>
            </div>
        </div>
    </div>
</div>
@endsection