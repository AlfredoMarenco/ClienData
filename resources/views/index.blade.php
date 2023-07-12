@extends('layouts.guest-landing')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-vandu fixed-top">
        <div class="container">
            <a class="navbar-brand img-fluid" href="#"><img src="img/2023/vandu-black.svg" alt=""
                    width="100"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#header">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
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
                        <a class="nav-link" href="#clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aliados">Aliados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="header">
        <div class="container">
            <div class="titular-uno">
                <div class="text-center">
                    <h1>Conectamos tecnología y estrategia <br class="d-none d-sm-none d-md-block d-lg-block"> para generar
                        leads de <span class="enfasis"> alto impacto</span></h1>
                    <p>Somos una agencia de marketing digital que utiliza la tecnología a tu <br
                            class="d-none d-sm-none d-md-block d-lg-block"> favor para elevar la
                        experiencia de atención a clientes y obtener leads <br
                            class="d-none d-sm-none d-md-block d-lg-block"> de manera sostenida y eficiente</p>
                    <button class="btn btn-primary">Cotiza con nosotros</button>
                </div>
            </div>
        </div>
    </header>
    <section id="servicios">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 m-auto uno">
                    <h2>Te ayudamos a gestionar <br class="d-none d-sm-none d-md-block d-lg-block"> la relación con tus
                        clientes</h2>
                    <p>Un cliente que se siente entendido es un cliente feliz, <b>nuestro equipo de Community Manager</b> se
                        encarga de encontrarle amigos a tu marca y de mantener esa relación a lo largo del tiempo.</p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 dos">
                    <div class="text-center">
                        <img src="{{ asset('img/2023/logos-1.svg') }}" class="img-fluid" alt="Manychat logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="titular-dos">
            <div class="container">
                <div class="text-center">
                    <h2>Creamos secuencias, flujos conversacionales <br class="d-none d-sm-none d-md-block d-lg-block"> e
                        identificamos palabras clave</h2>
                    <p>Analizamos la información sobre conversaciones, preguntas frecuentes, solicitudes y dudas a lo largo
                        del tiempo <br class="d-none d-sm-none d-md-block d-lg-block"> para nutrir la atención al cliente,
                        automatizar procesos de ventas, generar clientes potenciales y fomentar la <br
                            class="d-none d-sm-none d-md-block d-lg-block"> fidelidad de los clientes. Además, brindamos la
                        ventaja de estar disponibles las 24 horas y recopilar datos valiosos <br
                            class="d-none d-sm-none d-md-block d-lg-block">para mejorar la estrategia de marketing de tu
                        empresa.</p>
                    <img src="{{ asset('img/2023/secuencias.png') }}" class="img-fluid"
                        alt="Ejemplo de secuencia manychat por agenciavandu.com">
                </div>
            </div>
        </div>
    </section>
    <section id="soluciones">
        <div class="container">
            <div class="titular-tres">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 m-auto">
                        <h2>Diseñamos y desarrollamos <br class="d-none d-sm-none d-md-block d-lg-block"> páginas web y
                            sistemas que atrapan</h2>
                        <p>El contenido, tiempo de retención y de carga son aspectos clave para el posicionamiento de tu
                            empresa. Nos encargamos de usar las mejores prácticas para que puedas lograr tus objetivos
                            mensuales.</p>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('img/2023/web.png') }}" class="img-fluid"
                                alt="Portal de pagos por agenciavandu.com">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aliados">
        <div class="aliados">
            <div class="container">
                <div class="titular-cuatro text-center">
                    <h2>Una agencia validada por</h2>
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('img/2023/aliados.svg') }}" class="img-fluid"
                            alt="Aliados de agenciavandu.com">
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <img src="{{ asset('img/2023/m-aliados.svg') }}" class="img-fluid"
                            alt="aliados agenciavandu.com">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clientes">
        <div class="titular-cinco">
            <div class="container">
                <div class="text-center">
                    <h2>Generamos verdaderas <br class="d-none d-sm-none d-md-block d-lg-block"> estrategias digitales</h2>
                    <p>Imagina que estás participando en una carrera de autos en un circuito de alta velocidad.<br
                            class="d-none d-sm-none d-md-block d-lg-block">Para tener éxito en esta competencia, necesitas
                        una estrategia bien <br class="d-none d-sm-none d-md-block d-lg-block"> planificada que se asemeje a
                        la forma en que un conductor hábil aborda la pista.</p>
                    <button class="btn btn-primary">Platica con nosotros</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="titular-seis mb-5">
            <div class="container">
                <div class="text-center">
                    <h2>Ellos confían en nosotros</h2>
                    <img src="{{ asset('img/2023/clientes.svg') }}" class="img-fluid" alt="Clientes agenciavandu.com">

                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-4 col-md-6 col-sm-6 pt-5 m-auto">
                    <img src="{{ asset('img/2023/icono.svg') }}" class="10" alt="Logo Agencia Vandu">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 pt-5">
                    <h4>Síguenos</h4>
                    <p>
                        <a href="https://www.facebook.com/vandumx"
                                target="_blank"><i class="fab fa-facebook-square"
                                    style="font-size: 19px;"></i></a>
                        
                        <span>
                            <a href="https://www.instagram.com/vandumx" target="_blank" style="padding-left: 20px;"><i
                                class="fab fa-instagram" style="font-size: 19px;"></i></a>
                        </span>
                        <span>
                            <a href="https://www.behance.net/vandumx" target="_blank" style="padding-left: 20px;"><i
                                class="fab fa-behance-square" style="font-size: 19px;"></i></a>
                        </span>
                        <span>
                            <a href="https://www.linkedin.com/company/vandu-mx" target="_blank"
                            style="padding-left: 20px;"><i class="fab fa-linkedin"
                                style="font-size: 19px;"></i></a>
                        </span>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 pt-5">
                    <h4>Contáctanos</h4>
                    <p>ventas@agenciavandu.com</p>
                    <p><a href="tel:9993893710">999 389 3710</a></p>
                   
                </div>
            </div>
            <div class="text-center">
                <small>Agencia de Marketing digital y desarrollo web en Mérida </small>
            </div>
        </div>
    </footer>
@endsection
