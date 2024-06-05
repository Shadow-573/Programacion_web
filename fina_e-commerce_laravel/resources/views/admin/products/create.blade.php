@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Add Product</h1>
    <form action="{{ route('admin.products.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"  required>
        </div>

        <div class="form-group">
            <label for="SKU">SKU</label>
            <input type="text" class="form-control" id="SKU" name="SKU"  required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="short_description">Short Description</label>
            <textarea class="form-control" id="short_description" name="short_description" required></textarea>
        </div>

        <div class="form-group">
            <label for="sale_price">Sale Price</label>
            <input type="number" class="form-control" id="sale_price" name="sale_price">
        </div>

        <div class="form-group">
            <label for="regular_price">Regular Price</label>
            <input type="number" class="form-control" id="regular_price" name="regular_price"  required>
        </div>

        <div class="form-group">
            <label for="stock_status">Stock Status</label>
            <input type="text" class="form-control" id="stock_status" name="stock_status" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity"  required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image"required>
        </div>

        <div class="form-group">
            <label for="images">Images</label>
            <input type="text" class="form-control" id="images" name="images"required>
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            <input type="number" class="form-control" id="category_id" name="category_id" required>
        </div>

        <div class="form-group">
            <label for="brand_id">Brand</label>
            <input type="number" class="form-control" id="brand_id" name="brand_id"  required>
        </div>

        <!-- Agrega otros campos según sea necesario -->

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection