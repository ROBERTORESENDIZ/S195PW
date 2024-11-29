<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turista sin maps</title>
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class='ctG'>
                <h1>Bienvenido querido turista!</h1>
                <h6 >Presiona el boton para iniciar..</h6>
                <a href="{{route('rutaformulario')}}" class="btn btn-primary">Comencemos!</a>


        </div>
        
    </div>
</body>
</html>