@extends('app')

@section('edit')
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
        <p>Título da aula: <input type="text" name="tituloAula" id="tituloAula" value="{{ old('tituloAula') }}"></p>
        <p>Curso: <input type="text" name="curso" id="curso" value="{{ old('curso') }}"></p>
        <p>Aula do professor: <input type="text" name="profAula" id="profAula" value="{{ old('profAula') }}"></p>
        <p>Data da aula: <input type="date" name="dtAulaProf" id="dtAulaProf" value="{{ old('dtAulaProf') }}"></p>
        <p>Quantidade de horas por aula: <input type="time" name="qtdHrsAula" id="qtdHrsAula" value="{{ old('qtdHrsAula') }}"></p>
        <button type="submit">Atualizar</button>
    </form>
@endsection