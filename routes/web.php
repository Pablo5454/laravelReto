<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\RescateController;
use App\Http\Controllers\RescatadoController;
use App\Http\Controllers\TripulanteController;

// Ruta principal que redirige a la lista de médicos
Route::get('/', function () {
    return redirect('/medicos');
});




// Rutas para Médicos
Route::get('/medicos', [MedicoController::class, 'index']) -> name('medicos.index');

// Rutas para Viajes
Route::get('/', [ViajeController::class, 'index']) -> name('viajes.index,');

// Rutas para Rescates
Route::get('/', [RescateController::class, 'index']) -> name('rescates.index');

// Rutas para Rescatados
Route::get('/', [RescatadoController::class, 'index']) -> name('rescatados.index');

// Rutas para Tripulantes
Route::get('/', [TripulanteController::class, 'index']) -> name('tripulantes.index');
