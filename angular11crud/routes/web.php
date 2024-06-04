<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

// para ver el login
Route::get('/login', function () {
    return view('login');
});

// procesa los datos del login
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');

// para ver el dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');

Route::get('/cars', [CarController::class, 'index']); //muestra la lista de autos
Route::get('/cars/create', [CarController::class, 'create']); //muestra el formulario para crear autos
Route::post('/cars', [CarController::class, 'store']); //guarda los autos al enviar el formulario



