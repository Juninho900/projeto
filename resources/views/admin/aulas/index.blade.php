<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @extends('dash')

    @section('index3')
        <h1>Aulas</h1>

        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif
        <div class="row align-items-start">
            <div class="col-8">
                <a href="{{ route('aulas.create') }}">
                    <button type="button" class="btn btn-danger">
                        Criar nova aula
                    </button>
                </a>
            </div>
            <div class="col">
                <form action="{{ route('aulas.search') }}" method="post">
                    @csrf
                    <input type="text" name="search" placeholder="Buscar">
                    <button type="submit" class="btn btn-danger">Buscar</button>
                </form>
            </div>
        </div>

        @foreach ($aulas as $aula)
            <p>
                <div class="row align-items-center">
                    <div class="col-9">
                        {{ $aula -> tituloAula }}
                    </div>
                    <div class="col">
                        <a href="{{ route('aulas.show', $aula->id) }}">
                            <button type="button" class="btn btn-danger">
                                Ver
                            </button>
                        </a>
                        <a href="{{ route('aulas.edit', $aula->id) }}">
                            <button type="button" class="btn btn-danger">
                                Editar
                            </button>
                        </a>
                    </div>
                </div>
            </p>
        @endforeach

        @if (isset($filters))
            {{ $aulas->appends(filters)->links() }}
        @else
            {{ $aulas->links() }}
        @endif

    @endsection
</body>
</html>

