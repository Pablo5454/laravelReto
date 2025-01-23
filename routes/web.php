<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\RescateController;
use App\Http\Controllers\RescatadoController;
use App\Http\Controllers\TripulanteController;

// Ruta que redirige a la página principal
Route::get('/', function () {
    return redirect('/principal');
});


Route::view('/principal', 'principal') -> name('principal');


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
Route::get('/rescates/create', [RescateController::class, 'create']) -> name('rescates.create');
Route::post('/rescates/store', [RescateController::class, 'store'])->name('rescates.store');
Route::get('/rescates/show/{rescate}', [RescateController::class, 'show']) -> name('rescates.show');
Route::get('/rescates/edit/{rescate}', [RescateController::class, 'edit']) -> name('rescates.edit');
Route::put('/rescates/update/{rescate}', [RescateController::class, 'update'])->name('rescates.update');
Route::delete('/rescates/destroy/{rescate}', [RescateController::class, 'destroy']) -> name('rescates.destroy');
Route::get('/rescates', [RescateController::class, 'index']) -> name('rescates.index');

// Rutas para Rescatados
Route::get('/rescatados/create', [RescatadoController::class, 'create']) -> name('rescatados.create');
Route::post('/rescatados/store', [RescatadoController::class, 'store'])->name('rescatados.store');
Route::get('/rescatados/show/{rescatado}', [RescatadoController::class, 'show']) -> name('rescatados.show');
Route::get('/rescatados/edit/{rescatado}', [RescatadoController::class, 'edit']) -> name('rescatados.edit');
Route::put('/rescatados/update/{rescatado}', [RescatadoController::class, 'update'])->name('rescatados.update');
Route::delete('/rescatados/destroy/{rescatado}', [RescatadoController::class, 'destroy']) -> name('rescatados.destroy');
Route::get('/rescatados', [RescatadoController::class, 'index']) -> name('rescatados.index');


// Rutas para Tripulantes
Route::get('/tripulantes/create', [TripulanteController::class, 'create']) -> name('tripulantes.create');
Route::post('/tripulantes/store', [TripulanteController::class, 'store'])->name('tripulantes.store');
Route::get('/tripulantes/show/{tripulante}', [TripulanteController::class, 'show']) -> name('tripulantes.show');
Route::get('/tripulantes/edit/{tripulante}', [TripulanteController::class, 'edit']) -> name('tripulantes.edit');
Route::put('/tripulantes/update/{tripulante}', [TripulanteController::class, 'update'])->name('tripulantes.update');
Route::delete('/tripulantes/destroy/{tripulante}', [TripulanteController::class, 'destroy']) -> name('tripulantes.destroy');
Route::get('/tripulantes', [TripulanteController::class, 'index']) -> name('tripulantes.index');
