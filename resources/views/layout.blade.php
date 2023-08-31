<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lorem ipsum dolor</title>
    <link rel="stylesheet" href="{{asset('css/firstStyle.css')}}">

</head>

<body>
    <header class="header">
        <div class="logo">
            <span class="tittle">Lorem ipsum dolor.</span>
        </div>
        <nav class="navigation">
            <a class="nav-item" href="#">lorem</a>
            <a class="nav-item" href="#">ipsum</a>
            <a class="nav-item" href="#">dolor</a>
        </nav>
    </header>

    @yield('content')

</body>

</html>