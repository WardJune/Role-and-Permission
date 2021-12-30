@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Edit Product</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('products.index') }}" class="btn btn-info">Back</a>
        </div>
    </div>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control form-control-sm"
                        value="{{ old('name') ?? $product->name }}">
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                </div>

                <div class="form-group">
                    <label for="name">Product Detail</label>
                    <input type="text" name="detail" class="form-control form-control-sm"
                        value="{{ old('detail') ?? $product->detail }}">
                    <p class="text-danger">{{ $errors->first('detail') }}</p>
                </div>


                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </form>

@endsection
