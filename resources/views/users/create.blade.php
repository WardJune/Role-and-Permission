@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Create New User</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('users.index') }}" class="btn btn-info">Back</a>
        </div>
    </div>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}">
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" value="{{ old('email') }}">
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-sm"
                        value="{{ old('password') }}">
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control form-control-sm"
                        value="{{ old('password_confirmation') }}">
                    <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                </div>

                <label for="roles">Roles</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="roles[]" multiple>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <p class="text-danger">{{ $errors->first('roles') }}</p>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </form>

@endsection
