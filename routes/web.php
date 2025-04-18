<?php

use App\Http\Controllers\AlimentoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



/**
 * Rotas para a home
 */
Route::get('/home', [HomeController::class, 'index'])->name('home.index');


/**
 * Rotas para o Dashboard
 */
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


/**
 * * Rotas para o CRUD de Alimentos
 */
Route::get('/alimentos', [AlimentoController::class, 'index'])->name('alimentos.index');
Route::get('/alimentos/create', [AlimentoController::class, 'create'])->name('alimentos.create');
Route::post('/alimentos', [AlimentoController::class, 'store'])->name('alimentos.store');
Route::get('/alimentos/{id}', [AlimentoController::class, 'show'])->name('alimentos.show');
Route::get('/alimentos/{id}/edit', [AlimentoController::class, 'edit'])->name('alimentos.edit');
Route::put('/alimentos/{id}', [AlimentoController::class, 'update'])->name('alimentos.update');
Route::delete('/alimentos/{id}', [AlimentoController::class, 'destroy'])->name('alimentos.destroy');

/**
 * * Rotas para o CRUD de Pacientes
 */
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/{id}', [PacienteController::class, 'show'])->name('pacientes.show');
Route::get('/pacientes/{id}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');
Route::put('/pacientes/{id}', [PacienteController::class, 'update'])->name('pacientes.update');
Route::delete('/pacientes/{id}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');