@extends("layouts.app")
@section("title", "Dashboard")
@section("content")
<h1>Crear usuario</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirmar password" required>

    <button type="submit">Guardar</button>
</form>
@endsection
