@extends('layouts.plantilla1')
  @section('titulo','Formulario Clientes')
  @section('contenido')
 <!-- formulario -->
    <div class="container mt-5 col-md6">
      <div class="card font-monospace">
          <div class="card-header fs-5 text-primary">
              Registro de clientes
          </div>


          <div class="card-body">
              <form action="/enviar" method="POST">
                <!-- llave de paso para envios por post -->
                @csrf

              <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre:</label>
                  <input type="text" class="form-control" name="txtnombre" >
              </div>
              <div class="mb-3">
                  <label for="apellido" class="form-label">Apellido:</label>
                  <input type="text" class="form-control" name="txtapellido" >
              </div>
              <div class="mb-3">
                  <label for="correo" class="form-label">Correo:</label>
                  <input type="mail" class="form-control" name="txtcorreo" >
              </div>
              <div class="mb-3">
                  <label for="telefono" class="form-label">Telefono:</label>
                  <input type="number" class="form-control" name="txttelefono" >
              </div>
          </div>

          
          <div class="card-footer text-muted">
              <div class="d-grid grap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success">Guardar cliente</button>
              </div>
              </form>
          </div>
          
      </div>

    </div>
  @endsection