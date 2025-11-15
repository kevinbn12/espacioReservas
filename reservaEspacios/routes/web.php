<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ReservaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('espacios', EspacioController::class);
Route::resource('reservas', ReservaController::class);
