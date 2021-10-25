@extends('dashboard')

@section('create2')
    <h1>Criar uma nova conta para professor(a)</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('professors.store') }}" method="post">
        @csrf
        <p>Nome: <input type="text" name="nomeProf" id="nomeProf" value="{{ old('nomeProf') }}"></p>
        <p>E-mail: <input type="emailProf" name="emailProf" id="emailProf" value="{{ old('emailProf') }}"></p>
        <p>Telefone: <input type="text" name="telefoneProf" id="telefoneProf" value="{{ old('telefoneProf') }}"></p>
        <p>Número de registro: <input type="text" name="nRegistro" id="nRegistro" value="{{ old('nRegistro') }}"></p>
        <label for="titulacao"><p>Titulação: </p></label>
        <select name="titulacao" id="titulacao" value="{{ old('titulacao') }}">
            <option value="Especialista">Especialista</option>
            <option value="Mestrado(a)">Mestrado</option>
            <option value="Doutorado(a)">Doutorado</option>
        </select>
        <br>
        <button type="submit" class="btn btn-danger">Cadastrar</button>
    </form>
@endsection