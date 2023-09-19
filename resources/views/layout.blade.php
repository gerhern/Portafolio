<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_PORTNAME')}}</title>
    <link rel="stylesheet" href="{{asset('css/globalStyles.css')}}">

</head>

<body>
    <header class="header">
        <div class="logo">
            <a class="logoTitle" href="{{route('home')}}">{{env('APP_NAME')}}</a>
        </div>
        {{-- <nav class="navigation">
            <a class="nav-item" href="#">Proyectos</a>
            <a class="nav-item" href="#">Información</a>
            <a class="nav-item" href="#">Contacto</a>
        </nav> --}}
    </header>

    @yield('content')

</body>

</html>