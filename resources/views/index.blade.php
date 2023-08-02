@extends('layouts.guest-landing')
@section('content')
  
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
                    <a href="/contactar-a-un-asesor" class="btn btn-primary">Cotiza con nosotros</a>
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
                        <img src="{{ asset('img/2023/logos-1.svg') }}" width="100%" height="auto" alt="Manychat logo">
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
                            <img src="{{ asset('img/2023/web.png') }}" width="auto" height="100%"
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
                        <img src="{{ asset('img/2023/aliados.svg') }}" width="100%" height="auto"
                            alt="Aliados de agenciavandu.com">
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <img src="{{ asset('img/2023/m-aliados.svg') }}" width="100%" height="auto"
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
                    <a href="/contactar-a-un-asesor" class="btn btn-primary">Platica con nosotros</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="titular-seis mb-5">
            <div class="container">
                <div class="text-center">
                    <h2>Ellos confían en nosotros</h2>
                    <img src="{{ asset('img/2023/clientes.svg') }}" width="100%" height="auto" alt="Logos clientes | tokio 07, Kananfleet, Burger king, Pizza Hut">

                </div>
            </div>
        </div>
    </section>
    
@endsection
