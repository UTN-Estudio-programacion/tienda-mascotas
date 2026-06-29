<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Mascotas')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <h1><i class="fa-solid fa-paw"></i> Sistema de Mascotas</h1>
        <nav>
            <a href="{{ route('pets.index') }}"><i class="fa-solid fa-list"></i> Listado</a>
            <a href="{{ route('pets.create') }}"><i class="fa-solid fa-plus"></i> Nueva Mascota</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        Programación III - Laravel 13
    </footer>
</body>
</html>