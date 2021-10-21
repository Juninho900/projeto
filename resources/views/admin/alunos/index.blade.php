@extends('app')

@section('index')
    <h1>Início</h1>

    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('alunos.create') }}">Criar nova conta para aluno(a)</a>
    <form action="{{ route('alunos.search') }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="Buscar">
        <button type="submit">Buscar</button>
    </form>

    @foreach ($alunos as $aluno)
        <p>
            {{ $aluno -> nome }}
            <a href="{{ route('alunos.show', $aluno->id) }}">Ver</a>
            <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
        </p>
    @endforeach

    @if (isset($filters))
        {{ $alunos->appends(filters)->links() }}
    @else
        {{ $alunos->links() }}
    @endif

@endsection