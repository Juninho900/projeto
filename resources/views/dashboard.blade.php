<x-app-layout>          
    <!doctype html>
    <html lang="pt-br">
    <head>
        <title>@yield('title') {{ config('app.name') }}</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- Material Kit CSS -->
        <link href="/assets/css/material-dashboard.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="sidebar" data-color="danger">
            <div style="margin-left: 100px; margin-top: 10px;">
                <a href="{{ route('dashboard') }}">
                    <img src="/assets/img/50px-Laravel.jpg">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p><b>DASHBOARD</b></p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('alunos.index') }}">
                            <i class="material-icons">people</i>
                            <p><b>ALUNOS</b></p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('professors.index') }}">
                            <i class="material-icons">people</i>
                            <p><b>PROFESSORES</b></p>
                        </a>
                    </li>
                    <li class="nav-item active  ">
                        <a class="nav-link" href="{{ route('aulas.index') }}">
                            <i class="material-icons">event</i>
                            <p><b>AULAS</b></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="container-fluid">
                <h1>Tabela</h1>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-danger">
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Salário
                                </th>
                                <th>
                                    Quantidades de aulas por mês
                                </th>
                                <th>
                                    Valor por hora aula do(a) professor(a)
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($professors as $professor)
                                    <tr>
                                        <td>
                                            {{ $professor -> nomeProf }}
                                        </td>
                                        <td>
                                            R$ {{ $professor ->salario}} 
                                        </td>
                                        <td>
                                            {{ $professor ->qtdAulasMes}}
                                        </td>
                                        <td>
                                            R$ {{ $professor->valorHrAulaProf}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright float-center">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, feito com <i class="material-icons">favorite</i> pelo
                        <a href="" target="_blank">Antonio Rotta</a> por um melhor web.
                    </div>
                </div>
            </footer>
        </div>
    </body>
    </html>
</x-app-layout>
