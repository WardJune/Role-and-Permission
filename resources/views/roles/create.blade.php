@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Create New Role</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('roles.index') }}" class="btn btn-info">Back</a>
        </div>
    </div>

    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}">
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                </div>

                <div class="form-group">
                    @foreach ($permissions as $permission)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $permission->id }}"
                                id="{{ $permission->name }}" name="permission[]"> <label class="form-check-label"
                                for="{{ $permission->name }}">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @endforeach
                    <p class="text-danger">{{ $errors->first('permission') }}</p>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </form>

@endsection
