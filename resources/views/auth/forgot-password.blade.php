@extends('layouts.auth')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="logo" /><span
                class="splash-description">Please enter
                your user information.</span>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('password.request') }}">
                @csrf
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email"
                        placeholder="Enter your email address" autocomplete="off" required />
                    @error('email')
                        <span class="text text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-block btn-primary btn-xl">
                    Reset Password
                </button>
            </form>
        </div>
        <div class="card-footer text-center">
            <span>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span>
        </div>
    </div>
@endsection
