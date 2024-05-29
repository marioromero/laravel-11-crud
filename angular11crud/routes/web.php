<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cars', [CarController::class, 'index']); //muestra la lista de autos
Route::get('/cars/create', [CarController::class, 'create']); //muestra el formulario para crear autos
Route::post('/cars', [CarController::class, 'store']); //guarda los autos al enviar el formulario

