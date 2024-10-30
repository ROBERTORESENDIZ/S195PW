@extends('layouts.plantillaPrincipal')
@section('titulo','| Principal')
@section('seccion')
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet">

    <div class=" cont p-4 p-md-5 mb-2 rounded text-body-emphasis bg-body-secondary border border-dark">
        <div class="row">
            <div class="mb-4 col-lg-6 px-0">
                <h1 class="display-4 fst-italic">Premio Nobel de Literatura 2024</h1>
                <p class="lead my-3">El nuevo libro de la escritora surcoreana Han Kang, recién galardonada con el premio Nobel de Literatura 2024, será publicado próximamente en castellano por el sello Random House el próximo 5 de diciembre.</p>
                <p class="lead mb-0"><a href="https://www.bbc.com/mundo/articles/cje3414k14po" class="text-body-emphasis fw-bold">Continuar leyendo...</a></p>
            </div>
            <div class="col-lg-6 px-0">
                <img src="{{ asset('/img/nobel.jpg') }}" class="img-fluid"   alt="">
            </div>
        </div>
        
    </div>
@endsection