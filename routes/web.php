<?php

use App\Http\Controllers\{CadastroController};
use Illuminate\Support\Facades\Route;

Route::get('/cadastros', [CadastroController::class, 'cadastro']);

Route::get('/', function () {
    return view('login');
});
