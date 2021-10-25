<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    @extends('dashboard')

    @section('index')
        <h1>Início</h1>

        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif
        <div class="row align-items-start">
            <div class="col-8">
                <a href="{{ route('alunos.create') }}">
                    <button type="button" class="btn btn-danger">
                        Criar nova conta para aluno(a)
                    </button>
                </a>
            </div>
            <div class="col">
                <form action="{{ route('alunos.search') }}" method="post">
                    @csrf
                    <input type="text" name="search" placeholder="Buscar">
                    <button type="submit" class="btn btn-danger">Buscar</button>
                </form>
            </div>
        </div>

        @foreach ($alunos as $aluno)
            <p>
                <div class="row align-items-center">
                    <div class="col-9">
                        {{ $aluno -> nome }}
                    </div>
                    <div class="col">
                        <a href="{{ route('alunos.show', $aluno->id) }}">
                            <button type="button" class="btn btn-danger">
                                Ver
                            </button>
                        </a>
                        <a href="{{ route('alunos.edit', $aluno->id) }}">
                            <button type="button" class="btn btn-danger">
                                Editar
                            </button>
                        </a>
                    </div>
                </div>
            </p>
            <hr>
        @endforeach

        @if (isset($filters))
            {{ $alunos->appends(filters)->links() }}
        @else
            {{ $alunos->links() }}
        @endif

    @endsection
</body>
</html>

