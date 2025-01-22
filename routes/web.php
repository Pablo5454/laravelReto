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
Route::get('/medicos/create', [MedicoController::class, 'create']) -> name('medicos.create');
Route::post('/medicos/store', [MedicoController::class, 'store'])->name('medicos.store');
Route::get('/medicos/show/{medico}', [MedicoController::class, 'show']) -> name('medicos.show');
Route::get('/medicos/edit/{medico}', [MedicoController::class, 'edit']) -> name('medicos.edit');
Route::put('/medicos/update/{medico}', [MedicoController::class, 'update'])->name('medicos.update');
Route::delete('/medicos/destroy/{medico}', [MedicoController::class, 'destroy']) -> name('medicos.destroy');
Route::get('/medicos', [MedicoController::class, 'index']) -> name('medicos.index');

// Rutas para Viajes
Route::get('/viajes/create', [ViajeController::class, 'create']) -> name('viajes.create');
Route::post('/viajes/store', [ViajeController::class, 'store'])->name('viajes.store');
Route::get('/viajes/show/{viaje}', [ViajeController::class, 'show']) -> name('viajes.show');
Route::get('/viajes/edit/{viaje}', [ViajeController::class, 'edit']) -> name('viajes.edit');
Route::put('/viajes/update/{viaje}', [ViajeController::class, 'update'])->name('viajes.update');
Route::delete('/viajes/destroy/{viaje}', [ViajeController::class, 'destroy']) -> name('viajes.destroy');
Route::get('/viajes', [ViajeController::class, 'index']) -> name('viajes.index');

// Rutas para Rescates
Route::get('/', [RescateController::class, 'index']) -> name('rescates.index');

// Rutas para Rescatados
Route::get('/', [RescatadoController::class, 'index']) -> name('rescatados.index');

// Rutas para Tripulantes
Route::get('/', [TripulanteController::class, 'index']) -> name('tripulantes.index');
