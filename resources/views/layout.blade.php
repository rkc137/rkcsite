<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body class="">
    <header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 text-white">Главная</a></li>
            <li><a href="/about" class="nav-link px-2 text-white">Кто я</a></li>
        </ul>
        
        @if( auth()->check() )
        <div class="text-end">
            <a class="nav-link" href="/me">{{ auth()->user()->name }}</a>
            <a class="nav-link" href="/logout">Выйти</a>
        </div>
        @else
        <div class="text-end">
            <a class="nav-link" href="/register">Регистрация</a>
            <a class="nav-link" href="/login">Войти</a>
        </div>
        </div>
        @endif
    </div>
    </header>
    <div class="container">
        @yield('main_content')
    </div>
</body>
</html>