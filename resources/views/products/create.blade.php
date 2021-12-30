@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Create New Product</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('products.index') }}" class="btn btn-info">Back</a>
        </div>
    </div>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}">
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                </div>

                <div class="form-group">
                    <label for="name">Product Detail</label>
                    <input type="text" name="detail" class="form-control form-control-sm" value="{{ old('detail') }}">
                    <p class="text-danger">{{ $errors->first('detail') }}</p>
                </div>


                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </form>

@endsection
