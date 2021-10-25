<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ProfessorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::any('/alunos/search', [AlunoController::class, 'search'])->name('alunos.search');
    Route::any('/professors/search', [ProfessorController::class, 'search'])->name('professors.search');
    Route::any('/aulas/search', [AulaController::class, 'search'])->name('aulas.search');

    Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
    Route::get('/professors/create', [ProfessorController::class, 'create'])->name('professors.create');
    Route::get('/aulas/create', [AulaController::class, 'create'])->name('aulas.create');
    
    Route::put('/alunos/{id}', [AlunoController::class, 'update'])->name('alunos.update');
    Route::put('/professors/{id}', [ProfessorController::class, 'update'])->name('professors.update');
    Route::put('/aulas/{id}', [AulaController::class, 'update'])->name('aulas.update');
    
    Route::get('/alunos/edit/{id}', [AlunoController::class, 'edit'])->name('alunos.edit');
    Route::get('/professors/edit/{id}', [ProfessorController::class, 'edit'])->name('professors.edit');
    Route::get('/aulas/edit/{id}', [AulaController::class, 'edit'])->name('aulas.edit');

    Route::delete('/alunos/{id}', [AlunoController::class, 'destroy'])->name('alunos.destroy');
    Route::delete('/professors/{id}', [ProfessorController::class, 'destroy'])->name('professors.destroy');
    Route::delete('/aulas/{id}', [AulaController::class, 'destroy'])->name('aulas.destroy');
    
    Route::get('/alunos/{id}', [AlunoController::class, 'show'])->name('alunos.show');
    Route::get('/professors/{id}', [ProfessorController::class, 'show'])->name('professors.show');
    Route::get('/aulas/{id}', [AulaController::class, 'show'])->name('aulas.show');
    
    Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
    Route::post('/professors', [ProfessorController::class, 'store'])->name('professors.store');
    Route::post('/aulas', [AulaController::class, 'store'])->name('aulas.store');
    
    Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
    Route::get('/professors', [ProfessorController::class, 'index'])->name('professors.index');
    Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');
});

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/dashboard', function ()
{
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
