<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadorController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas CRUD
Route::resource('computadores', ComputadorController::class);

// Vista para buscar un computador por ID
Route::get('buscar-computador', function () {
    return view('computadores.buscar');
})->name('computadores.buscar.form');

// Acción POST para procesar la búsqueda
Route::post('buscar-computador', [ComputadorController::class, 'search'])->name('computadores.buscar');
