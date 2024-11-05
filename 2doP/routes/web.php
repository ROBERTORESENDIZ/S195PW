<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorFrituras;

Route::get('/', function () {
    return view('form');
});

route::get('/',[ControladorFrituras::class,'abrirFormulario'])->name('rutaform');


