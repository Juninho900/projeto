@extends('dash')

@section('edit3')
    <h1>Editar a informação da aula {{ $aula->nome }}</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('aulas.update', $aula->id) }}" method="post">
        @csrf 
        @method('put')
        <p>Título da aula: <input type="text" name="tituloAula" id="tituloAula" value="{{ $aula->tituloAula }}"></p>
        <label for="curso"><p>Curso: </p></label>
        <select name="curso" id="curso" value="{{ $aula->curso }}">
            <option value="Administração">Administração</option>
            <option value="Direito">Direito</option>
            <option value="Educação Física">Educação Física</option>
            <option value="Engenharia de Computação">Engenharia de Computação</option>
            <option value="Engenharia de Software">Engenharia de Software</option>
        </select>
        <label for="profAula"><p>Aula do professor: </p></label>
        <select name="profAula" id="profAula" value="{{ $aula->profAula }}">
            @foreach($professors as $professor)
                <option value="{{ $professor->id }}" {{$company->shopping_id == $professor->id  ? 'selected' : ''}}>{{ $professor->nomeProf}}</option>
            @endforeach
        </select>
        <p>Data da aula: <input type="date" name="dtAulaProf" id="dtAulaProf" value="{{ $aula->dtAulaProf }}"></p>
        <p>Quantidade de horas por aula: <input type="time" name="qtdHrsAula" id="qtdHrsAula" value="{{ $aula->qtdHrsAula }}"></p>
        <button type="submit" class="btn btn-danger">Atualizar</button>
    </form>
@endsection