<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\clienteController;

/* Route::get('/', function () {
    return view('welcome');
}); */

// Route::view('/', 'inicio')->name('rutainicio');

// Route::view('/formulario', 'formulario')->name('rutaformulario');

// Route::view('/cliente', 'cliente')->name('rutaclientes');

Route::view('/componentes', 'componentes')->name('rutacomponentes');






// Rutas para trabajar con controladores
// Route::get('/', [controladorVistas::class,'home'])->name('rutainicio');

// Route::get('/formulario', [controladorVistas::class,'formulario'])->name('rutaformulario');

//Route::get('/cliente', [controladorVistas::class,'consulta'])->name('rutaclientes');

// Route::post('/enviar',[controladorVistas::class,'procesarCliente'])->name('procesar');



// Rutas de clienteController
Route::get('/', [clienteController::class,'home'])->name('rutainicio');
Route::get('/cliente/create', [clienteController::class,'create'])->name('rutaformulario');
Route::post('/ciente',[clienteController::class,'store'])->name('procesar');
Route::get('/cliente', [clienteController::class,'index'])->name('rutaclientes');