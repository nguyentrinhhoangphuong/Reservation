@extends('layouts.frontend.index')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Forgot Password</h2>
            
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Reset Password Button -->
                <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>
            </form>

            <!-- Back to Login Link -->
            <div class="text-center mt-3">
                <a href="{{ route('login') }}" class="custom-link">Back to Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
