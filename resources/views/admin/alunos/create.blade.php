@extends('dashboard')

@section('create')
    <h1>Criar uma nova conta para aluno(a)</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('alunos.store') }}" method="post">
        @csrf
        <p>Nome: <input type="text" name="nome" id="nome" value="{{ old('nome') }}"></p>
        <p>E-mail: <input type="email" name="email" id="email" value="{{ old('email') }}"></p>
        <p>Telefone: <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}"></p>
        <p>Data de nascimento: <input type="date" name="dtNasc" id="dtNasc" value="{{ old('dtNasc') }}"></p>
        <div>
            <p>Situação:
                <input type="radio" id="situacao" name="situacao" value="1" checked>
                <label for="situacao">Ativo</label>
                <input type="radio" id="situacao" name="situacao" value="0">
                <label for="situacao">Inativo</label>
            </p>
        </div>
        <p>RA: <input type="text" name="ra" id="ra" value="{{ old('ra') }}"></p>
        <button type="submit" class="btn btn-danger">Cadastrar</button>
    </form>
@endsection