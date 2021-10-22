@extends('app')

@section('show2')
    <h1>Informação do(a) aluno(a) {{ $professor->nomeProf }}</h1>

    <ul>
        <li><strong>E-mail:</strong> {{ $professor->emailProf }}</li>
        <li><strong>Telefone:</strong> {{ $professor->telefoneProf }}</li>
        <li><strong>Número de registro: </strong> {{ $professor->nRegistro }}</li>
        <li><strong>Titulação: </strong> {{ $professor->titulacao }}</li>    
    </ul>

    <form action="{{ route('professors.destroy', $professor->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Remover</button>
    </form>
@endsection