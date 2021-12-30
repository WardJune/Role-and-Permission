@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Show User</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('users.index') }}" class="btn btn-info">Back</a>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name :</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Roles :</strong>
                @if (!empty($user->getRoleNames()))
                    @foreach ($user->getRoleNames() as $role)
                        <span class="badge bg-success">{{ $role }}</span>
                    @endforeach
                @endif
            </div>
        </div>

    </div>
@endsection
