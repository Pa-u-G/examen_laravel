<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi App')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <h1>Examen laravel</h1>
        <nav>
            <a href="{{ route('inscription.index') }}">eventos</a>
            <a href="{{ route('admin.index') }}">zona admin</a>
            
        </nav>
    </header>

    <div>
        @yield('content')
</div>
</body>
</html>
