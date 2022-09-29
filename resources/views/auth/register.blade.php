@extends('layouts.auth')

@section('content')
    <form method="post" action="{{ route('register') }}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registration Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Full name"
                        autocomplete="off" value="{{ old('name') }}" required />
                    @error('name')
                        <span class="text text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required placeholder="Email"
                        autocomplete="off" value="{{ old('email') }}" />
                    @error('email')
                        <span class="text text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" name="password" type="password" required
                        placeholder="Password" />
                    @error('password')
                        <span class="text text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Confirm Password" type="password"
                        name="password_confirmation" value="{{ old('password_confirmation') }}" required />
                    @error('password_confirmation')
                        <span class="text text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">
                        Register
                    </button>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>
                    Already member? <a href="{{ route('login') }}" class="text-secondary">Login Here.</a>
                </p>
            </div>
        </div>
    </form>
@endsection
