<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Storm @yield('titulo')</title>
    @vite(['resources/js/app.js'])


    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>



    <link href="{{ asset('/css/plantillaPrincipal.css') }}" rel="stylesheet">
    <link href="/your-path-to-uicons/css/uicons-[your-style].css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

</head>
<body >
    <header class="cnav d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom border-2 border-dark rounded-bottom-4">
      <a href="{{route('rutaindex')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto me-5 link-body-emphasis text-decoration-none">
        <i class="ms-4"><img  src="{{ asset('/img/tormenta-de-arena.png') }}" alt=""></i>
        <span class="fs-4">Book Storm</span>
      </a>

      <ul class="nav nav-underline me-5  ">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rutaregistrarlibro')?'active':'text-dark' }}" aria-current="page" href="{{route('rutaregistrarlibro')}}">{{__('Registro de libros')}}</a>
            </li>
        </ul>
    </header>
    

    <div class="container-fluid mb-2">
       @yield('seccion')
    </div>


    <footer class=" d-flex flex-wrap justify-content-between align-items-center py-3 border-top border-black">
        <div class=" d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body text-decoration-none lh-1">
            <i class="ms-4"><img  src="{{ asset('/img/tormenta-de-arena.png') }}" alt=""></i>
            <span class="">Book Storm</span>
        </a>
        </div>

        <span class=" mb-3 mb-md-0 text-body">© 2024 Company, Inc copyright</span>
        <span class=" me-5  mb-3 mb-md-0 text-body">29/10/2024 </span>

  </footer>
</body>
</html>