@extends('app')

@section('edit')
    <h1>Editar a informação do(a) aluno(a) {{ $aluno->nome }}</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('alunos.update', $aluno->id) }}" method="post">
        @csrf 
        @method('put')
        <p>Nome: <input type="text" name="nome" id="nome" value="{{ $aluno->nome }}"></p>
        <p>E-mail: <input type="email" name="email" id="email" value="{{ $aluno->email }}"></p>
        <p>Telefone: <input type="text" name="telefone" id="telefone" value="{{ $aluno->telefone }}"></p>
        <p>Data de nascimento: <input type="date" name="dtNasc" id="dtNasc" value="{{ $aluno->dtNasc }}"></p>
        <div>
            <p>Situação:
                <input type="radio" id="situacao" name="situacao" value="1" checked>
                <label for="situacao">Ativo</label>
                <input type="radio" id="situacao" name="situacao" value="0">
                <label for="situacao">Inativo</label>
            </p>
        </div>
        <p>RA: <input type="text" name="ra" id="ra" value="{{ $aluno->ra }}"></p>
        <button type="submit">Atualizar</button>
    </form>
@endsection