@extends("layouts.app")
@section("title", "Dashboard")
@section("content")
@if(session('error'))
   <div class="alert alert-danger">
      {{ session('error') }}
   </div>
@endif
<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
@endsection