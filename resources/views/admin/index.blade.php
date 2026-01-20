@extends("layouts.app")
@section("title", "Dashboard")
@section("content")
<form action="{{ route('logout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit">Logout</button>
</form>

<table>
    <tr>
        <td>nom esdeveniment</td>
        <td>data esdeveniment </td>
        <td>nom persona</td>
        <td>email persona</td>
        <td>dni persona</td>
    </tr>
    @foreach($inscriptions as $inscription)
        <tr>
            <td>{{ $inscription->eventRelation->name }}</td>
            <td>{{ $inscription->eventRelation->date }}</td>
            <td>{{ $inscription->name }}</td>
            <td>{{ $inscription->email }}</td>
            <td><a href="{{ route('admin.download', $inscription) }}">descargar</a></td>
        </tr>
    @endforeach   
</table>

filtro nombres

<form action="{{ route('admin.search') }}" method="POST">
    @csrf
    @method("POST")
    <input type="text" name="name" id="name">
    <input type="date" name="date" id="date">
    <input type="submit">
</form>



@endsection