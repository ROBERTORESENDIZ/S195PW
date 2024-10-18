<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\repasoConvertidor;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/','portada')->name('portada');
Route::get('/repaso1',[repasoConvertidor::class,'vista'])->name('REPASO1');
Route::post('/proceso1',[repasoConvertidor::class,'proceso1'])->name('PROCESO1');
Route::post('/proceso2',[repasoConvertidor::class,'proceso2'])->name('PROCESO2');
