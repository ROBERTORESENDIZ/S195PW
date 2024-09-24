<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Turista sin Mapas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Registro de clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Consultar clientes</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>


 <!-- formulario -->

<div class="card text-center">
    <div class="card-header">
        Registro de clientes
    </div>


    <div class="card-body">
        <form action="">

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="" >
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="" >
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="mail" class="form-control" id="" >
        </div>
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono:</label>
            <input type="number" class="form-control" id="" >
        </div>
    </div>

    
    <div class="card-footer text-body-secondary">
        <button type="submit" class="btn btn-success">Holaaaaaaaaaaa</button>
        </form>
    </div>
    
</div>


</body>
</html>