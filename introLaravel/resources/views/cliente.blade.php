@extends('layouts.plantilla1')
  @section('titulo','Clientes')

  @section('contenido')

  @foreach($consultaClientes as $cliente)
    <div class="container mt-5 col-md-8">
        <div class="card font-monospace">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre}}
            </div>


            <div class="card-body">
                <h5 class="fw-bold">{{ $cliente->correo}}</h5>
                <h5 class="fw-medium">{{ $cliente->telefono}}</h5>
            </div>

            
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                <p class="card-text fw-linghter"> </p>
            </div>
        </div>
    </div>

  @endforeach
 
  @endsection('contenido')
