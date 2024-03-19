<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\InscripcionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('asistente')->middleware(['auth', 'verified', 'mdrol:asistente'])->group(function () {
    Route::get('/eventos', [EventoController::class, 'index'])->name('asistente.eventos');
    Route::get('/eventos/semana', [EventoController::class, 'showSemana'])->name('asistente.eventos.semana');
    Route::get('/eventos/mes', [EventoController::class, 'showMes'])->name('asistente.eventos.mes');
    Route::get('/eventos/filtrar', [EventoController::class, 'filtrarCategoria'])->name('asistente.eventos.filtrar');
    Route::post('/inscripcion', [InscripcionController::class, 'store'])->name('inscripcion.store');
    Route::get('inscripciones/show', [InscripcionController::class, 'index'])->name('inscripciones.show');
    Route::get('/explora', function () {
        return view('asistente.explora');
    })->name('asistente.explora');
    Route::get('/experiencias', [ExperienciaController::class, 'index'])->name('asistente.experiencias');
});

Route::prefix('admin')->middleware(['auth', 'verified', 'mdrol:admin'])->group(function () {
    Route::get('/dashboard', [EventoController::class, 'indexAdmin'])->name('admin.dashboard');
    Route::get('/usuarios', [RegisteredUserController::class, 'show'])->name('admin.users');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
