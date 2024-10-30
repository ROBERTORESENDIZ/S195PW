@extends('layouts.plantillaPrincipal')
@section('titulo','| Registrar Libro')
@section('seccion')
    <link href="{{ asset('/css/registrarLibro.css') }}" rel="stylesheet">

    
    <div class="row m-4">
        <div class="col-12">
            <h1 class="fst-italic">{{__('Registro de libros')}}</h1>
        </div>  
    </div>
    <div class=" card m-4">
        <div class="card-body">
            <form class="row g-3" action="/registrarLibro/guardar" method="POST">

                @csrf 
                
                <div class="col-md-2 col-sm-12">
                    <label class="form-label">ISBN:</label>
                    <input type="text" class="form-control border-dark" name="isbn" value="{{old('isbn')}}">
                    <small class="text-warning bg-dark">{{ $errors->first('isbn') }}</small>
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">{{__('Titulo:')}}</label>
                    <input type="text" class="form-control border-dark" name="titulo" value="{{old('titulo')}}" >
                    <small class="text-warning bg-dark">{{ $errors->first('titulo') }}</small>
                </div>
                <div class="col-md-5 col-sm-12">
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">{{__('Autor:')}}</label>
                    <input type="text" class="form-control border-dark" name="autor" value="{{old('autor')}}" >
                    <small class="text-warning bg-dark">{{ $errors->first('autor') }}</small>
                </div>
                <div class="col-md-2  col-sm-12">
                    <label class="form-label">{{__('Páginas:')}}</label>
                    <input type="text" class="form-control border-dark" name="paginas" value="{{old('paginas')}}" >
                    <small class="text-warning bg-dark">{{ $errors->first('paginas') }}</small>
                </div>
                <div class="col-md-2 col-sm-12">
                    <label class="form-label">{{__('Año:')}}</label>
                    <input type="text" class="form-control border-dark" name="año" value="{{old('año')}}">
                    <small class="text-warning bg-dark">{{ $errors->first('año') }}</small>
                </div>
                <div class="col-md-3 col-sm-12">
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">{{__('Editorial:')}}</label>
                    <input type="text" class="form-control border-dark" name="editorial" value="{{old('editorial')}}">
                    <small class="text-warning bg-dark">{{ $errors->first('editorial') }}</small>
                </div>
                <div class="col-md-5 col-sm-12">
                    <label class="form-label">{{__('Correo Editorial:')}}</label>
                    <input type="text" class="form-control border-dark" name="email-editorial" value="{{old('email-editorial')}}">
                    <small class="text-warning bg-dark">{{ $errors->first('email-editorial') }}</small>
                </div>
                <div class="col-md-2 col-sm-12">
                </div>
                <div class="col-md-2 col-sm-12">
                    <button type="submit" class="btn btn-success"> {{__('Guardar Libro')}} </button>
                </div>
                @if( session ('confirmacion'))
                    <script>
                        alertify.success('{{__('Todo correcto: Libro ')}} {{session ('confirmacion')}} {{__(' Guardado correctamente')}}' );
                    </script>
                @endif

            </form>

        </div>
        
        
    </div>
@endsection