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
    <div class="content">
        <div class="wrapper ">
            <div class="sidebar" data-color="danger" data-background-color="white">
                <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

                Tip 2: you can also add an image using data-image tag
                -->
                <div class="logo">
                    <img src="/assets/img/50px-Laravel.jpg" class="">
                    <!-- <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                        Creative Tim
                    </a> -->
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item active  ">
                            <a class="nav-link" href="{{ route('alunos.index') }}">
                                <i class="material-icons">home</i>
                                <p><b>INÍCIO</b></p>
                            </a>
                        </li>
                        <!-- your sidebar here -->
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:;">Dashboard</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:;">
                                        <i class="material-icons">notifications</i> Notificações
                                    </a>
                                </li>
                                your navbar here
                            </ul>
                        </div>
                    </div>
                </nav> -->
                <!-- End Navbar -->
                <div class="content">

                    <div class="container-fluid">
                        <!-- your content here -->
                        @yield('index')
                        @yield('create')
                        @yield('show')
                        @yield('edit')

                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <!-- <a href="https://www.creative-tim.com">
                                        Creative Tim
                                    </a> -->
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright float-center">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, feito com <i class="material-icons">favorite</i> pelo
                            <a href="" target="_blank">Antonio Rotta</a> por um melhor web.
                        </div>
                        <!-- your footer here -->
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>