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
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email"  required>
        </div>

        <div class="form-group">
            <label for="email_verified_at">Email verificado</label>
            <input type="text" class="form-control" id="email_verified_at" name="email_verified_at">
        </div>

        <div class="form-group">
            <label for="password">contraseña</label>
            <input type="text" class="form-control" id="password" name="password" value="123456789">
        </div>

        <div class="form-group">
            <label for="utype">Rol</label>
            <textarea class="form-control" id="utype" name="utype" required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Salvar Cambios</button>
    </form>
</div>
@endsection
