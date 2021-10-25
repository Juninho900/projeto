@extends('app')

@section('edit2')
    <h1>Editar a informação do(a) professor(a) {{ $professor->nomeProf }}</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('professors.update', $professor->id) }}" method="post">
        @csrf 
        @method('put')
        <p>Nome: <input type="text" name="nomeProf" id="nomeProf" value="{{ $professor->nomeProf }}"></p>
        <p>E-mail: <input type="emailProf" name="emailProf" id="emailProf" value="{{ $professor->emailProf }}"></p>
        <p>Telefone: <input type="text" name="telefoneProf" id="telefoneProf" value="{{ $professor->telefoneProf }}"></p>
        <p>Número de registro: <input type="text" name="nRegistro" id="nRegistro" value="{{ $professor->nRegistro }}"></p>
        <label for="titulacao">Titulação:</label>
        <select name="titulacao" id="titulacao" value="{{ $professor->titulacao }}">
            <option value="Especialista">Especialista</option>
            <option value="Mestrado(a)">Mestrado(a)</option>
            <option value="Doutorado(a)">Doutorado(a)</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>
@endsection