@extends('layouts.terrenos')
@section('subtitle', 'Bienes Raíces')
@section('content')
    <header class="inicio">
        <div class="container">
            <div class="inicio__titular text-center">
                <h1 class="d-inline px-2 display-3">
                    Domen Inmobiliaria
                </h1>
                <h2 class="mt-2 mb-4">
                    INVERSIÓN INTELIGENTE
                </h2>

                <div class="mt-5 pt-5">
                    <a class="btn btn-success my-4 my-sm-0" style="text-transform: uppercase;"  data-toggle="modal" data-target="#exampleModal">
                        <span class="pl-2 m-auto">Hablar con un asesor</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="tipos-de-desarrollos">
        <div class="container border-bottom border-danger">
            <div class="tipos-de-desarrollos__titular text-center">
                <h5>
                    Nuestra experiencia nos respalda
                </h5>
                {{-- <h3>
                    Nuestros servicios
                </h3> --}}
            </div>
            <div class="tipos-de-desarrollos__caracteristicas">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <figure>
                            <img src="{{ asset('img/domen/logo-domen.png') }}" style="width:12rem;" alt="">
                        </figure>
                        {{-- <h5>Lorem Ipsum</h5> --}}
                        <p class="px-5">Proyectos de inversión inmobiliaria en Yucatán. Queremos ofrecerte los mejores terrenos
                            residenciales a precios accesibles para poner a trabajar tu capital, protegerlo, diversificar tu
                            portafolio o adquirir un patrimonio a medida de tus planes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="desarrollos">
        <!-- CCM -->
        <div class="bg-w">
            <div class="container desarrollos__merida">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                        <figure>
                            <img src="/img/cc-m-logo.svg" class="img-fluid mb-sm-5 sm-display" alt="Logo Ciudad Central Mérida">
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 desarrollos__descripcion border-left border-danger text-left">
                        <h6>Terrenos residenciales</h6>
                        <h3>Ciudad Central Mérida</h3>
                        <p>Ubicado al noreste de Mérida, Ciudad Central tiene para ti los terrenos residenciales ideales
                            para comenzar tu inversión, proyectados a 4 años en su entrega. <br> <br>
                            Cada lote será proporcionado con todos los servicios subterráneos, una cualidad que tienen las
                            comunidades planeadas a la vanguardia.
                        </p>
                        <a href="{{ route('desarrollo.ccm') }}" class="btn btn-success">CONOCE EL DESARROLLO</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end CCM -->
        <!-- CCP -->
        <div class="bg-w">
            <div class="container desarrollos__merida">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 desarrollos__descripcion border-right border-danger text-right">
                        <h6>Lo mejor de dos mundos</h6>
                        <h3>Ciudad Central Progreso</h3>
                        <p>Ubicado al norte de Mérida, Ciudad Central tiene para ti los terrenos residenciales ideales
                            para comenzar tu inversión, proyectados a 5 años en su entrega. <br> <br>
                            Cada lote será proporcionado con todos los servicios subterráneos, una cualidad que tienen las
                            comunidades planeadas a la vanguardia.
                        </p>
                        <a href="{{ route('desarrollo.ccp') }}" class="btn btn-success">CONOCE EL DESARROLLO</a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                        <figure>
                            <img src="/img/logo-ccp.svg" class="img-fluid mt-sm-5 sm-display" alt="Logo Ciudad Central Mérida">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!-- end CCP -->

        <!-- IM -->
        <div class="bg-w">
            <div class="container desarrollos__merida">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                        <figure>
                            <img src="{{ asset('img/domen/logo-imperio-maya.jpg') }}" class="img-fluid sm-display" alt="Logo Ciudad Central Mérida">
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 desarrollos__descripcion border-left border-danger text-left">
                        <h6>Terrenos semi-urbanizados</h6>
                        <h3>Imperio Maya</h3>
                        <p>Es un proyecto de lotes semi urbanizados al noreste de la ciudad de Mérida Yucatán con gran oportunidad de crecimiento
                        </p>
                        <a href="" class="btn btn-secondary">PROXIMAMENTE</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end IM -->
    </section>
    {{-- <section class="certeza">
        <div class="container">
            <div class="certeza__titular text-center">
                <h5>
                    lorem ipsum dolor sit a met
                </h5>
                <h3>
                    INVERTIR EN YUCATÁN ES ADELANTARSE AL FUTURO
                </h3>
                <p>
                    Ya que el valor de la tierra se encuentra en franco crecimiento como lo estuvieron CDMX, Querétaro o
                    Monterrey en el pasado, por nombrar algunos ejemplos, por lo que el valor de tu inversión no puede más
                    que aumentar durante los próximos años. Yucatán es reconocido por ser hogar de grandes industrias
                    locales, nacionales y extranjeras que hacen de su crecimiento económico la columna vertebral de grandes
                    proyectos.
                    <br> <br>
                    Por mencionar algunos: - Parque Eólico de Progreso - Planta Fotovoltaica San Ignacio - FINCANTIERI -
                    Ampliación y modernización del Puerto Aduanal - Amazon - Walmart - PCC Airfoils - Nuevo Estadio
                    Sostenible de Yucatán.
                </p>
            </div>

        </div>
    </section> --}}
@endsection
