@extends('layouts.base')
@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="email_verified_at">Email verificado</label>
            <textarea class="form-control" id="email_verified_at" name="email_verified_at">{{ $user->email_verified_at }}</textarea>
        </div>

        <div class="form-group">
            <label for="utype">Rol</label>
            <textarea class="form-control" id="utype" name="utype" required>{{ $user->utype ?? '' }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Cambios</button>
    </form>
</div>
@endsection
