@extends('app')

@section('create')
    <h1>CADASTRO</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <p>Nome: <input type="text" name="nome" id="nome" value="{{ old('nome') }}"></p>
        <p>E-mail: <input type="email" name="email" id="email" value="{{ old('email') }}"></p>
        <p>Telefone: <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}"></p>
        <p>Data de nascimento: <input type="date" name="dtNasc" id="dtNasc" value="{{ old('dtNasc') }}"></p>
        <label for="ativo">Situação: </label>
        <select name="ativo" id="ativo" value="{{ old('ativo') }}">
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select>
        <p>RA: <input type="text" name="ra" id="ra" value="{{ old('ra') }}"></p>
        <button type="submit">Cadastrar</button>
    </form>
@endsection