<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/','portada')->name('portada');
Route::view('/repaso1','repaso1')->name('REPASO1');