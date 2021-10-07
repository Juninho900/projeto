<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro()
    {
        $cadastros = Cadastro::get();
        return view('cadastro', compact('cadastros'));
    }
}
