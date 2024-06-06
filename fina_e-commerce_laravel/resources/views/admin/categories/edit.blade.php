@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Edit Categories</h1>
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}" required>
        </div>

        

        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $category->image ?? '' }}" required>
        </div>

        <!-- Agrega otros campos según sea necesario -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection