@extends('layouts.auth')

@section('content')
    <form method="post" action="{{ route('password.update') }}">
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <input type="hidden" name="email" class="form-control" value="{{ $request->email }}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Reset Password</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" name="password" type="password" required
                        placeholder="Enter new Password" />
                    @error('password')
                        <span class="text text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Confirm Password" type="password"
                        name="password_confirmation" required />
                    @error('password_confirmation')
                        <span class="text text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">
                        Reset Password
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
