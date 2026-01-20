@extends("layouts.app")
@section("title", "Dashboard")
@section("content")
@if(session('error'))
   <div class="alert alert-danger">
      {{ session('error') }}
   </div>
@endif
<form action="{{ route('inscription.store', $event->id) }}" enctype="multipart/form-data" method="POST" >
    @csrf
    @method("POST")
    <label for="name">nom</label>
    <input type="text" name="name" id="name">
    <label for="email">email</label>
    <input type="email" name="email" id="email">
    <label for="dni">dni</label>
    <input type="file" name="dni[]" id="dni">
    <input type="submit">
</form>

@endsection
