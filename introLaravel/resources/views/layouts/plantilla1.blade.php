<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title> @yield('titulo') </title>
</head>
<body>
    <!-- Inicia Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('rutainicio')}}">Turista sin Mapas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('rutaformulario')?'text-warning':'' }}" aria-current="page" href="{{route('rutaformulario')}}">Registro de clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('rutaclientes')?'text-warning':'' }}" href="{{route('rutaclientes')}}">Consultar clientes</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <!-- Termina Navbar -->

    @yield('contenido')
</body>
</html>