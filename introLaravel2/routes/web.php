<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'inicio')->name('rutainicio');

Route::resource('cliente', ClienteController::class);


