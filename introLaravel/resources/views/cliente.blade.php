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
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalC{{ $cliente->id}}">Actualizar</button>
                <button type="submit" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#Cliente{{ $cliente->id}}">Eliminar</button>
                <p class="card-text fw-linghter"> </p>
            </div>
        </div>
    </div>

    <!-- Modal formulario UPDATE -->
    <div class="modal fade" id="ModalC{{ $cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="/cienteActualizar/{{ $cliente->id}}" method="POST">
                        <!-- llave de paso para envios por post -->
                        @csrf

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre:')}}</label>
                        <input type="text" class="form-control"  name="txtnombre"  value="{{ $cliente->nombre}}">
                        <small class="text-danger fts-italic">{{ $errors->first('txtnombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido:')}}</label>
                        <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido}}">
                        <small class="text-danger fts-italic">{{ $errors->first('txtapellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo:')}}</label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{ $cliente->correo}}">
                        <small class="text-danger fts-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Telefono:')}}</label>
                        <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono}}">
                        <small class="text-danger fts-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="sumit" class="btn btn-success">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-DeleteAlert nombreCliente='{{ $cliente->nombre}}' numCliente='{{ $cliente->id}}'> </x-DeleteAlert>

  @endforeach

  


    @session('exitoupdate')
        <script>
        Swal.fire({
            title: "Actualizacion exitosa",
            text: "{{ $value }}",
            icon: "success",
            showConfirmButton: false,
            timer: 1700
            });
        </script>
    @endsession

    @session('exitodelete')
        <script>
        Swal.fire({
            title: "Eliminacion exitosa",
            text: "{{ $value }}",
            icon: "success",
            showConfirmButton: false,
            timer: 1700
            });
        </script>
    @endsession

  @endsection('contenido')
