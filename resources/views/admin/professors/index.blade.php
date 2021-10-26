<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @extends('dash')

    @section('index2')
        <h1>Professores</h1>

        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif
        <div class="row align-items-start">
            <div class="col-8">
                <a href="{{ route('professors.create') }}">
                    <button type="button" class="btn btn-danger">
                        Criar nova conta para professor(a)
                    </button>
                </a>
            </div>
            <div class="col">
                <form action="{{ route('professors.search') }}" method="post">
                    @csrf
                    <input type="text" name="search" placeholder="Buscar">
                    <button type="submit" class="btn btn-danger">Buscar</button>
                </form>
            </div>
        </div>

        @foreach ($professors as $professor)
            <p>
                <div class="row align-items-center">
                    <div class="col-9">
                        {{ $professor -> nomeProf }}
                    </div>
                    <div class="col">
                        <a href="{{ route('professors.show', $professor->id) }}">
                            <button type="button" class="btn btn-danger">
                                Ver
                            </button>
                        </a>
                        <a href="{{ route('professors.edit', $professor->id) }}">
                            <button type="button" class="btn btn-danger">
                                Editar
                            </button>
                        </a>
                    </div>
                </div>
            </p>
        @endforeach

        @if (isset($filters))
            {{ $professors->appends(filters)->links() }}
        @else
            {{ $professors->links() }}
        @endif

    @endsection
</body>
</html>

