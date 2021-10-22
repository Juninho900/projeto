@extends('app')

@section('create3')
    <h1>Criar uma nova aula</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('aulas.store') }}" method="post">
        @csrf
        <p>Título da aula: <input type="text" name="tituloAula" id="tituloAula" value="{{ old('tituloAula') }}"></p>
        <p>Curso: <input type="text" name="curso" id="curso" value="{{ old('curso') }}"></p>
        <p>Aula do professor: <input type="text" name="profAula" id="profAula" value="{{ old('profAula') }}"></p>
        <p>Data da aula: <input type="date" name="dtAulaProf" id="dtAulaProf" value="{{ old('dtAulaProf') }}"></p>
        <p>Quantidade de horas por aula: <input type="time" name="qtdHrsAula" id="qtdHrsAula" value="{{ old('qtdHrsAula') }}"></p>
        <button type="submit">Cadastrar</button>
    </form>
@endsection