@extends('layouts.contacto')
@section('content')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-vandu fixed-top">
            <div class="container">
                <a class="navbar-brand img-fluid" href="/"><img src="img/2023/vandu-black.svg" alt=""
                        width="100"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Servicios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Soluciones
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item">Muy pronto</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Aliados</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="titular-contacto text-center">
                <h1>Estaremos encantados de escucharte</h1>
                <p>Juntos, podemos crear una estrategia que elevará tu marca a nuevos horizontes. <b
                        class="d none d-sm-none d-md-block d-lg-block"></b> ¡No esperes más,
                    comunícate con nuestros asesores y <span class="enfasis-contacto">prepárate para cambiar el juego
                        digital!</span> "</p>
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                <div class="formulario">
                    <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "40223801",
                            formId: "b009ced9-3fed-4a87-8316-dd4ecda99a66"
                        });
                    </script>
                </div>
            </div>
            
        </div>
    </section>
@endsection
