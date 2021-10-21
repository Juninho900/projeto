@extends('app')

@section('show')
    <h1>Informação do(a) aluno(a) {{ $aluno->nome }}</h1>

    <ul>
        <li><strong>E-mail:</strong> {{ $aluno->email }}</li>
        <li><strong>Telefone:</strong> {{ $aluno->telefone }}</li>
        <li><strong>Data de nascimento:</strong> {{ $aluno->dtNasc }}</li>
        <li><strong>Situação:</strong> {{ $aluno->situacao }}</li>    
        <li><strong>RA:</strong> {{ $aluno->ra }}</li>
    </ul>

    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Remover</button>
    </form>
@endsection