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
        {{--  --}}
        <div class="navigationMenu">
            <input type="checkbox" id="check">    
            <label for="check" class="checkbtn">
                <i class="menu-icon"><img src="{{ asset("img/logos/menu-logo.svg") }}" alt=""></i>
            </label>
            <ul>
                <li><a href="{{ route("home") }}">Inicio</a></li>
                <li><a class="nav-item" href="{{ route('proyects') }}">Proyectos</a></li>
                {{-- <li><a href="">Servicios</a></li>
                <li><a href="">Contacto</a></li> --}}
            </ul>
        </div>
    </header>

    @yield('content')

</body>

</html>

<script>
    document.getElementById("media-logo").addEventListener("click", function () {
      var menu = document.getElementById("hamburguerMenu");
    //   console.log(menu)
      if (menu.style.display === "none") {
        menu.style.display = "flex ";
      } else {
        menu.style.display = "none";
      }
    });
  </script>