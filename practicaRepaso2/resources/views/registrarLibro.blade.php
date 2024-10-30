@extends('layouts.plantillaPrincipal')
@section('titulo','| Registrar Libro')
@section('seccion')
    <link href="{{ asset('/css/registrarLibro.css') }}" rel="stylesheet">

    
    <div class="row m-4">
        <div class="col-12">
            <h1 class="fst-italic">Registro de libros</h1>
        </div>  
    </div>
    <div class=" card m-4">
        <div class="card-body">
            <form class="row g-3" action="/registrarLibro/guardar" method="POST">

                @csrf 
                
                <div class="col-md-2 col-sm-12">
                    <label class="form-label">ISBN:</label>
                    <input type="text" class="form-control border-dark" name="isbn" >
                    <small class="text-warning bg-dark">{{ $errors->first('isbn') }}</small>
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">Titulo:</label>
                    <input type="text" class="form-control border-dark" name="titulo" >
                    <small class="text-warning bg-dark">{{ $errors->first('titulo') }}</small>
                </div>
                <div class="col-md-5 col-sm-12">
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">Autor:</label>
                    <input type="text" class="form-control border-dark" name="autor" >
                    <small class="text-warning bg-dark">{{ $errors->first('autor') }}</small>
                </div>
                <div class="col-md-2  col-sm-12">
                    <label class="form-label">Páginas:</label>
                    <input type="text" class="form-control border-dark" name="paginas" >
                    <small class="text-warning bg-dark">{{ $errors->first('paginas') }}</small>
                </div>
                <div class="col-md-2 col-sm-12">
                    <label class="form-label">año:</label>
                    <input type="text" class="form-control border-dark" name="año" >
                    <small class="text-warning bg-dark">{{ $errors->first('año') }}</small>
                </div>
                <div class="col-md-3 col-sm-12">
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">Editorial:</label>
                    <input type="text" class="form-control border-dark" name="editorial" >
                    <small class="text-warning bg-dark">{{ $errors->first('editorial') }}</small>
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">Email-Editorial:</label>
                    <input type="text" class="form-control border-dark" name="email-editorial" >
                    <small class="text-warning bg-dark">{{ $errors->first('email-editorial') }}</small>
                </div>
                <div class="col-md-2 col-sm-12">
                </div>
                <div class="col-md-2 col-sm-12">
                    <button type="submit" class="btn btn-success"> Guardar Libro </button>
                </div>
                @if( session ('confirmacion'))
                    <script>
                        alertify.success('{{session ('confirmacion')}}');
                    </script>
                @endif

            </form>

        </div>
        
        
    </div>
@endsection