@extends('layouts.auth')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <a href="/"><img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a><span
                class="splash-description">Please enter your user information.</span>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input class="form-control form-control-lg" name="email" id="email" type="email"
                        placeholder="Email address" autocomplete="off" value="{{ old('email') }}" required />
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" id="password" type="password"
                        placeholder="Password" required value="{{ old('password') }}" />
                    @error('email')
                        <div class="alert alert-danger mt-3" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Sign in
                </button>
            </form>
        </div>
        <div class="card-footer bg-white p-0">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="{{ route('register') }}" class="footer-link">Create An Account</a>
            </div>
            <div class="card-footer-item card-footer-item-bordered">
                <a href="{{ route('password.request') }}" class="footer-link">Forgot Password</a>
            </div>
        </div>
    </div>
@endsection
