@extends('dash')

@section('show3')
    <h1>Informação da aula de {{ $aula->tituloAula }}</h1>

    <ul>
        <li><strong>Curso: </strong> {{ $aula->curso }}</li>
        <li><strong>Aula do professor: </strong> {{ $aula->professor->nomeProf }}</li>
        <li><strong>Data da aula: </strong> {{ date('d/m/Y', strtotime($aula->dtAulaProf)) }}</li>
        <li><strong>Quantidade de horas por aula: </strong> {{ $aula->qtdHrsAula }} horas por aula</li>
    </ul>

    <form action="{{ route('aulas.destroy', $aula->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Remover</button>
    </form>
@endsection