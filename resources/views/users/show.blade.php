@extends("layouts.app")
@section("title", "Dashboard")
@section("content")
<h1>Ver usuario</h1>

<p>ID: {{ $user->id }}</p>
<p>Nombre: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>

<a href="{{ route('users.index') }}">Volver</a>
@endsection
