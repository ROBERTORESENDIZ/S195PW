<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources\js\app.js')
</head>
<body>

    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">
    @if(session ('fritura'))
    <div class="container mt-4">
        <div class="alert alert-success" role="alert">
             {{session('fritura')}}
        </div>
    </div>
    @endif
    <form action="/envioform" method="POST">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
            <small class="text-danger">{{$errors->first('nombre')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Sabor(s): </label>
            <input type="text" class="form-control"  name="sabor" value="{{old('sabor')}}">
            <small class="text-danger">{{$errors->first('sabor')}}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Peso: </label>
            <input type="text" class="form-control"  name="peso" value="{{old('peso')}}">
            <small class="text-danger">{{$errors->first('peso')}}</small>
        </div>

        <button type="sumit" class="btn btn-primary " > Guardar Fritura</button>
</div>

</body>
</html>