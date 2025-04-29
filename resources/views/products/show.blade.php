@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h4 class="mb-0">Product Details</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>

                    <p class="card-text">
                        <strong>Description:</strong>
                        {{ $product->description ?? 'No description available.' }}
                    </p>

                    <p class="card-text">
                        <strong>Price:</strong>
                        ${{ number_format($product->price, 2) }}
                    </p>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                            Back to List
                        </a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-success">
                            Edit Product
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
