@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Role "{{ $role->name }}"</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('roles.index') }}" class="btn btn-info">Back</a>
            @can('roles-edit')
                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Edit</a>
            @endcan
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name :</strong>
                {{ $role->name }}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Permissions :</strong>
                <ul class="list-group list-group-flush col-md-3">
                    @foreach ($role->permissions as $permission)
                        <li class="list-group-item">{{ $permission->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
