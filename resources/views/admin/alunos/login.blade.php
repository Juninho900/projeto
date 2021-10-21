@extends('app')

@section('login')
    <h1>Login para aluno(a)</h1>
    <a href="{{ route('alunos.create') }}">Criar nova conta para aluno(a)</a>
@endsection