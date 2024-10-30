<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorRegistroL;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','index')->name('rutaindex'); 
Route::get('/registrarLibro',[controladorRegistroL::class,'vistaRegistroL'])->name('rutaregistrarlibro');
Route::post('/registrarLibro/guardar',[controladorRegistroL::class,'guardadLibro'])->name('rutaguardarlibro');