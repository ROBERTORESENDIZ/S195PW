@extends('layouts.plantilla1')
  @section('titulo','Componentes Blade')

  @section('contenido')
    <x-Card encabezado="Hola S195" titulo="Titulo 1" textoBoton="Guardar"> prueba 1 Slot para contrnido</x-Card>
    
    <x-Card encabezado="DUDASS?" titulo="Titulo 2" textoBoton="No guardar"> otro gataaaaato!!!!</x-Card>
    

    <x-Alert tipo="success"> Alerta Verde</x-Alert>

    <x-Alert tipo="danger"> Alerta Rojo</x-Alert>

  @endsection