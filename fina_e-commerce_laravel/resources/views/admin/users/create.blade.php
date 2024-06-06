@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Add User</h1>
    <form action="{{ route('admin.users.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="slug">Email</label>
            <input type="text" class="form-control" id="email" name="email"  required>
        </div>

        <div class="form-group">
            <label for="SKU">Email verificado</label>
            <input type="text" class="form-control" id="email_verfied_at" name="email_ver"  required>
        </div>

        <div class="form-group">
            <label for="description">Rol</label>
            <textarea class="form-control" id="utype" name="rol" required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Salvar Cambios</button>
    </form>
</div>
@endsection
