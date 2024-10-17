<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('apartado') | LARAVEL </title>
    @vite(['resources/js/app.js'])
    <style>
        .navbar{
            background-color: #002E74;
        }
        .titul{
            margin-top: 2%;
        }
    </style>
</head>
<body>
    <nav class="navbar " data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('portada')}}">Roberto Resendiz</a>
            <span class="navbar-brand mb-0 h1">S195</span>
        </div>
    </nav>
    <h1 class='titul text-center col-12 font-monospace'><b>@yield('repaso')</b>@yield('titulo')</h1>
    @yield('contenedor')
</body>
</html>