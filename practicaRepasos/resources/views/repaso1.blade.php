<!-- Herencia de plantilla -->
@extends('layouts.plantillaBase')

<!-- Secciones que se renderizan sobre la plantilla  -->
@section('apartado','REPASO 1')
@section('repaso','REPASO 1: ')
@section('titulo','Convertidor')

@section('contenedor')
    <!-- Contenedor principal -->
    <div class="container">
        
        <!-- Estilos para seccionar corectamente la vista -->
        <style>
        .card{
            margin-top: 4vh;
            margin-bottom: 2vh;
        }
        label{
            margin-top: 2vh;
        }
        .form-control{
            margin-bottom: 2vh;
        }
        </style>


        <div class="row">

            <!-- Componente que genera la card para realizar la converción entre MB y GB -->
            <x-Convertidor t="GB y MB" c1="De MB a GB" c2="De GB a MB" tp="1"></x-Convertidor>

            <!-- Seccion ppara mostrar el resultado de la converción realizada -->
            <div class="col-8">
                <div class="card">
                    <h5 class="card-header">Resultados</h5>
                    <div class="card-body">
                        <!-- Componente que genera la el alrt para mostrar la converción -->
                        @if(request()->routeIs('PROCESO1'))
                            <x-alertConvertidor r="{{ $resultado}}"></x-alertConvertidor>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Componente que genera la card para realizar la converción entre GB y TB-->
            <x-Convertidor t="GB y TB" c1="De GB a TB" c2="De TB a GB" tp="2"></x-Convertidor>

            <!-- Seccion para mostrar el resultado de la converción realizada -->
            <div class="col-8">
                <div class="card">
                    <h5 class="card-header">Resultados</h5>
                    <div class="card-body">
                         <!-- Componente que genera la el alrt para mostrar la converción -->
                        @if(request()->routeIs('PROCESO2'))
                            <x-alertConvertidor r="{{ $resultado}}"></x-alertConvertidor>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
