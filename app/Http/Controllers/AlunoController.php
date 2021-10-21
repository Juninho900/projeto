<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAluno;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::orderBy('nome', 'ASC')->paginate();
        return view('admin.alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('admin.alunos.create');
    }

    public function store(StoreUpdateAluno $request)
    {
        Aluno::create($request->all());
        return redirect()
            ->route('alunos.index')
            ->with('message', 'Informação foi criada com sucesso');
    }

    public function show($id)
    {
        //$aluno = Aluno::where('id', $id)->first();
        $aluno = Aluno::find($id);
        if(!$aluno)
        {
            return redirect()->route('alunos.index');
        }
        return view('admin.alunos.show', compact('aluno'));
    }

    public function destroy($id)
    {
        if (!$aluno = Aluno::find($id)) 
            return redirect()->route('alunos.index');
            
            $aluno->delete();

            return redirect()
                ->route('alunos.index')
                ->with('message', 'Removido com sucesso');
    }
    
    public function edit($id)
    {
        if (!$aluno = Aluno::find($id)) {
            return redirect()->back();
        }

        return view('admin.alunos.edit', compact('aluno'));
    }

    public function update(StoreUpdateAluno $request, $id)
    {
        if (!$aluno = Aluno::find($id)) {
            return redirect()->back();
        }

        $aluno->update($request->all());

        return redirect()
            ->route('alunos.index')
            ->with('message', 'Informação foi atualizada com sucesso');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $alunos = Aluno::where('nome', 'LIKE', "%{$request->search}%")
                        ->paginate();

        return view('admin.alunos.index', compact('alunos'));
    }
}
