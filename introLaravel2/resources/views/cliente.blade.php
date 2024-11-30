@extends('layouts.plantilla1')
  @section('titulo','Clientes')

  @section('contenido')
    @foreach($consulta as $item)
 
    <div class="container mt-5 col-md-8">
        <div class="card font-monospace">
            <div class="card-header fs-5 text-primary">
                {{ $item->nombre}}
            </div>


            <div class="card-body">
                <h5 class="fw-bold"></h5>{{ $item->correo}}
                <h5 class="fw-medium"></h5>{{ $item->telefono}}
            </div>

            
            <div class="card-footer text-muted">
                    <!-- disparadores para la vista Clientes -->

                <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list-stars"></i> Opciones
                        </button>
                        <ul class="dropdown-menu">
                            <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id}}">
                                <i class="bi bi-pencil-square"></i>Editar 
                            </button>
                            <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$item->id}}">
                                <i class="bi bi-trash"></i> Borrar 
                            </button>
                        </ul>
                </div> 

            </div>
        </div>
    </div>
    @include('options')
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
