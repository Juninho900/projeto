@extends('dash')

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
        <label for="curso"><p>Curso: </p></label>
        <select name="curso" id="curso" value="{{ old('curso') }}">
            <option value="Administração">Administração</option>
            <option value="Direito">Direito</option>
            <option value="Educação Física">Educação Física</option>
            <option value="Engenharia de Computação">Engenharia de Computação</option>
            <option value="Engenharia de Software">Engenharia de Software</option>
        </select>
        <p>Aula do professor: <input type="text" name="profAula" id="profAula" value="{{ old('profAula') }}"></p>
        <p>Data da aula: <input type="date" name="dtAulaProf" id="dtAulaProf" value="{{ old('dtAulaProf') }}"></p>
        <p>Quantidade de horas por aula: <input type="time" name="qtdHrsAula" id="qtdHrsAula" value="{{ old('qtdHrsAula') }}"></p>
        <button type="submit" class="btn btn-danger">Cadastrar</button>
    </form>
@endsection