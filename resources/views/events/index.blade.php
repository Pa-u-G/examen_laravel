@extends("layouts.app")
@section("title", "Dashboard")
@section("content")

<table>
    <tr>
        <td>nom</td>
        <td>descripcion</td>
        <td>fecha</td>
        <td>formulario</td>
    </tr>
    @foreach($events as $event)
        <tr>
            <td>{{ $event->name }}</td>
            <td>{{ $event->desc }}</td>
            <td>{{ $event->date }}</td>
            <td><a href="{{ route('inscription.create', $event) }}">inscrippcion</a></td>
        </tr>
    @endforeach
</table>

@endsection
