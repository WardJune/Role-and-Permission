@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Role Management</h3>
        </div>
        <div class="col-md-6 text-end">
            @can('role-create')
                <a href="{{ route('roles.create') }}" class="btn btn-info text-light">Create New Role</a>
            @endcan
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($roles as $role)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info btn-sm">Show</a>
                        @can('role-edit')
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        @endcan
                        @can('role-delete')
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $roles->links() }}
@endsection
