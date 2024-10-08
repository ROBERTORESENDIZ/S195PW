<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutaformulario');

Route::view('/cliente', 'cliente')->name('rutaclientes');

Route::view('/componentes', 'componentes')->name('rutacomponentes');