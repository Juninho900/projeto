<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProfessor;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $professors = Professor::orderBy('nomeProf', 'ASC')->paginate();
        return view('admin.professors.index', compact('professors'));
    }

    public function create()
    {
        return view('admin.professors.create');
    }

    public function store(StoreUpdateProfessor $request)
    {
        Professor::create($request->all());
        return redirect()
            ->route('professors.index')
            ->with('massage', 'Informação foi criada com sucesso');
    }

    public function show($id)
    {
        $professor = Professor::find($id);
        if(!$professor)
        {
            return redirect()->route('professors.index');
        }

        return view('admin.professors.show', compact('professor'));
    }

    public function destroy($id)
    {
        if(!$professor = Professor::find($id))
            return redirect()->route('professors.index');

            $professor->delete();

            return redirect()
                ->route('professors.index')
                ->with('message', 'Removido com sucesso');
    }

    public function edit($id)
    {
        if(!$professor = Professor::find($id))
        {
            return redirect()->back();
        }

        return view('admin.professors.edit', compact('professor'));
    }

    public function update(StoreUpdateProfessor $request, $id)
    {
        if(!$professor = Professor::find($id))
        {
            return redirect()->back();
        }

        $professor->update($request->all());

        return redirect()
            ->route('professors.index')
            ->with('message', 'Informação foi atualizada com sucesso');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $professors = Professor::where('nome', 'LIKE', "%{$request->search}%")
                                ->paginate();
        
        return view('admin.professors.index', compact('professors'));
    }
}
