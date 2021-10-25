<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAula;
use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::orderBy('tituloAula', 'ASC')->paginate();
        return view('admin.aulas.index', compact('aulas'));
    }

    public function create()
    {
        return view('admin.aulas.create');
    }

    public function store(StoreUpdateAula $request)
    {
        Aula::create($request->all());
        return redirect()
            ->route('aulas.index')
            ->with('message', 'Informação foi criada com sucesso');
    }

    public function show($id)
    {
        $aula = Aula::find($id);
        if(!$aula)
        {
            return redirect()->route('aulas.index');
        }
        return view('admin.aulas.show', compact('aula'));
    }

    public function destroy($id)
    {
        if (!$aula = Aula::find($id)) 
            return redirect()->route('aulas.index');
            
            $aula->delete();

            return redirect()
                ->route('aulas.index')
                ->with('message', 'Removido com sucesso');
    }
    
    public function edit($id)
    {
        if (!$aula = Aula::find($id))
        {
            return redirect()->back();
        }

        return view('admin.aulas.edit', compact('aula'));
    }

    public function update(StoreUpdateAula $request, $id)
    {
        if (!$aula = Aula::find($id)) 
        {
            return redirect()->back();
        }

        $aula->update($request->all());

        return redirect()
            ->route('aulas.index')
            ->with('message', 'Informação foi atualizada com sucesso');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $aulas = Aula::where('tituloAula', 'LIKE', "%{$request->search}%")
                        ->paginate();

        return view('admin.aulas.index', compact('aulas'));
    }
}
