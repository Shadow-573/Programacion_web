@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('admin.users.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="slug">Email</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $product->slug }}" required>
        </div>

        <div class="form-group">
            <label for="description">Email verificado</label>
            <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="short_description">Rol</label>
            <textarea class="form-control" id="short_description" name="short_description" required>{{ $product->short_description ?? '' }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Cambios</button>
    </form>
</div>
@endsection
