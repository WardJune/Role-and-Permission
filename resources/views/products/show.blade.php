@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Show Product</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('products.index') }}" class="btn btn-info">Back</a>
            @can('product-edit')
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
            @endcan
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name :</strong>
                {{ $product->name }}
            </div>

            <div class="form-group">
                <strong>Detail :</strong>
                {{ $product->detail }}
            </div>
        </div>

    </div>
@endsection
