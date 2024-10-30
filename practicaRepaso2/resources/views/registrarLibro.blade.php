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
            <form class="row g-3" action="">
                
                <div class="col-md-2 col-sm-12">
                    <label class="form-label">ISBN:</label>
                    <input type="text" class="form-control" name="isbn" >
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">Titulo:</label>
                    <input type="text" class="form-control" name="titulo" >
                </div>
                <div class="col-md-5 col-sm-12">
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">Autor:</label>
                    <input type="text" class="form-control" name="autor" >
                </div>
                <div class="col-md-2  col-sm-12">
                    <label class="form-label">Páginas:</label>
                    <input type="text" class="form-control" name="paginas" >
                </div>
                <div class="col-md-2 col-sm-12">
                    <label class="form-label">año:</label>
                    <input type="text" class="form-control" name="año" >
                </div>
                <div class="col-md-3 col-sm-12">
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">Editorial:</label>
                    <input type="text" class="form-control" name="editorial" >
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">Email-Editorial:</label>
                    <input type="text" class="form-control" name="email-editorial" >
                </div>
                <div class="col-md-2 col-sm-12">
                </div>
                <div class="col-md-2 col-sm-12">
                    <button type="submit" class="btn btn-success"> Guardar Libro </button>
                </div>


            </form>
        </div>
    </div>
@endsection