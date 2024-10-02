@extends('admindashlayout')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" required>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" name="category" class="form-control" value="{{ $product->category }}" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>

            <div class="form-group">
                <label for="old_price">Old Price (optional):</label>
                <input type="number" step="0.01" name="old_price" class="form-control" value="{{ $product->old_price }}">
            </div>

            <div class="form-group">
                <label for="image">Product Image (optional):</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="is_best_seller">Best Seller:</label>
                <input type="checkbox" name="is_best_seller" value="1" {{ $product->is_best_seller ? 'checked' : '' }}>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
