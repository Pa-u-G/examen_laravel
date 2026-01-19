<h1>Editar usuario</h1>

<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $user->name }}" required>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <input type="password" name="password" placeholder="Nueva password (opcional)">
    <input type="password" name="password_confirmation" placeholder="Confirmar password">

    <button type="submit">Actualizar</button>
</form>
