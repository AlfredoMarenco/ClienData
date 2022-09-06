<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Grupo Domen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/domen/logo-grupodomen.png') }}" alt="Logo: Grupo Domen" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-4">
                        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Desarrollos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/ciudad-central-merida">Ciudad Central Mérida</a>
                            <a class="dropdown-item" href="/ciudad-central-progreso">Ciudad Central Progreso</a>
                            <a class="dropdown-item" href="#">Imperio Maya</a>
                        </div>
                    </li>

                    <li class="nav-item mr-4">
                        <a href="#" class="nav-link disabled">Contacto</a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0">
                    <button class="btn btn-primary my-2 my-sm-0" type="button" class="btn btn-primary"
                        data-toggle="modal" data-target="#exampleModal">
                        Hablar con un asesor
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        @livewire('form-leads')
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </main>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <h3>¿Te interesa saber más?</h3>
                    <p>Dejanos tus datos si te interesa coitzar alguno de nuestros desarrllos
                        y uno de nuestros asesores se comunicará contigo para ayudarte
                        a descubrir cual es la mejor opción para ti.
                    </p>
                    <div class="row">
                        <div class="col text-center">
                            <img src="{{ asset('img/domen/logo-grupodomen-negro.png') }}" width="100"
                                alt="Logo terrenos mid">
                        </div>
                        <div class="col">
                            <p><strong>Siguenos en redes sociales</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    @livewire('form-leads')
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
            $('a').toggleClass('scrolled', $(this).scrollTop() > 100);
        })
        </script>
    @livewireScripts
</body>

</html>
