@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Add Category</h1>
    <form action="{{ route('admin.categories.store')}}" method="POST">
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
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image"required>
        </div>
        <!-- Agrega otros campos según sea necesario -->

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection