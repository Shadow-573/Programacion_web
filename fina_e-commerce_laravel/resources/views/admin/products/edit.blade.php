@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Edit Product</h1>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $product->slug }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="short_description">Short Description</label>
            <textarea class="form-control" id="short_description" name="short_description" required>{{ $product->short_description ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="sale_price">Sale Price</label>
            <input type="number" class="form-control" id="sale_price" name="sale_price" value="{{ $product->sale_price ?? '' }}">
        </div>

        <div class="form-group">
            <label for="regular_price">Regular Price</label>
            <input type="number" class="form-control" id="regular_price" name="regular_price" value="{{ $product->regular_price ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="stock_status">Stock Status</label>
            <input type="text" class="form-control" id="stock_status" name="stock_status" value="{{ $product->stock_status ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $product->image ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            <input type="number" class="form-control" id="category_id" name="category_id" value="{{ $product->category_id ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="brand_id">Brand</label>
            <input type="number" class="form-control" id="brand_id" name="brand_id" value="{{ $product->brand_id ?? '' }}" required>
        </div>

        <!-- Agrega otros campos según sea necesario -->

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection