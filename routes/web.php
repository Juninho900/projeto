<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::any('/alunos/search', [AlunoController::class, 'search'])->name('alunos.search');
    Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
    Route::put('/alunos/{id}', [AlunoController::class, 'update'])->name('alunos.update');
    Route::get('/alunos/edit/{id}', [AlunoController::class, 'edit'])->name('alunos.edit');
    Route::delete('/alunos/{id}', [AlunoController::class, 'destroy'])->name('alunos.destroy');
    Route::get('/alunos/{id}', [AlunoController::class, 'show'])->name('alunos.show');
    Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
    Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
