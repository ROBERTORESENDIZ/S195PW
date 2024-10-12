<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

/* Route::get('/', function () {
    return view('welcome');
}); */

// Route::view('/', 'inicio')->name('rutainicio');

// Route::view('/formulario', 'formulario')->name('rutaformulario');

// Route::view('/cliente', 'cliente')->name('rutaclientes');

Route::view('/componentes', 'componentes')->name('rutacomponentes');






// Rutas para trabajar con controladores
Route::get('/', [controladorVistas::class,'home'])->name('rutainicio');

Route::get('/formulario', [controladorVistas::class,'formulario'])->name('rutaformulario');

Route::get('/cliente', [controladorVistas::class,'consulta'])->name('rutaclientes');