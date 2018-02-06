<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            .active{
                text-decoration: none;
                color: green;
            }
        </style>
        <title>Paginas</title>
    </head>
    <body>
        <header>
            <h1>{{ request()->is('/') ? 'Estas en el home' : 'No estas en el home' }}</h1>
            <ul class="nav">
              <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">Inicio</a>
              </li>

              <li class="nav-item {{ request()->is('saludos/Huber') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('saludos', 'Huber') }}">Saludo</a>
              </li>

              <li class="nav-item {{ request()->is('contactame') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contactanos') }}">Contactanos</a>
              </li>
            </ul>
        </header>
        @yield('contenido')
        <footer>Copyright {{ date('Y') }}</footer>
    </body>
</html>
