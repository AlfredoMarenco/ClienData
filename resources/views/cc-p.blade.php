@extends('layouts.terrenos')
@section('subtitle', 'Ciudad Central Progreso')
@section('content')
    <header class="inicio-1">
        <div class="container">
            <div class="inicio__titular text-center">
                <h1>ciudad central progreso</h1>
                <p>
                    Terrenos residenciales con el respaldo de años y años de
                    experiencia.
                </p>
                <button class="btn btn-success my-2 my-sm-0" type="button" class="btn btn-success" data-toggle="modal"
                    data-target="#exampleModal" style="text-transform: uppercase">
                    <span class="pl-2 m-auto">Mensualidades desde $2,162 MXN</span>
                </button>
            </div>
        </div>
    </header>
    <section class="desarrollos">
        <div class="container desarrollos__merida">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 desarrollos__descripcion">
                    <h6>Lo mejor de dos mundos</h6>
                    <h3>Ciudad Central Progreso</h3>
                    <p>
                        Este desarrollo cuenta con 140 hectáreas, inspiradas en la
                        cultura veraniega yucateca, con la belleza de su naturaleza y la
                        espiritualidad de sus costumbres.
                        <br /><br />
                        Cada espacio del mismo invita a despejar tu mente y desacelerar
                        tu ritmo de vida para el bienestar máximo.
                    </p>
                    <button href="" class="btn btn-success" type="button" class="btn btn-success"
                        data-toggle="modal" data-target="#exampleModal">CONTACTAR A UN ASESOR</button>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <figure>
                        <img src="/img/puntos.png" class="img-fluid" alt="Logo Ciudad Central Mérida" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="amenidades">
        <div class="container">
            <div class="certeza__titular text-center pb-4">
                <h5>INVERTIR EN YUCATÁN ES ADELANTARSE AL FUTURO</h5>
                <h3>Un desarrollo con múltiples amenidades</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <figure>
                        <img src="/img/mapa.png" class="img-fluid" alt="Logo Ciudad Central Mérida" />
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="row">
                        <div class="col-6 amenidades__opciones">
                            <figure>
                                <img src="{{ asset('img/domen/icon-agua-potable-1.png') }}" width="50" height="50"
                                    alt="" />
                            </figure>
                            <h5>Agua Potable</h5>
                            <p>
                                Servicio de agua a pie de tu lote.
                            </p>
                        </div>
                        <div class="col-6 amenidades__opciones">
                            <figure>
                                <img src="{{ asset('img/domen/icon-aguas-residuales.png') }}" width="50" height="50"
                                    alt="" />
                            </figure>
                            <h5>Aguas Residuales</h5>
                            <p>
                                Tratamiento individual de aguas residuales.
                            </p>
                        </div>
                        <div class="col-6 amenidades__opciones">
                            <figure>
                                <img src="{{ asset('img/domen/icon-energia-electrica-1.png') }}" width="50"
                                    height="50" alt="" />
                            </figure>
                            <h5>Energía Eléctrica</h5>
                            <p>
                                Servicio de electricidad a pie de tu lote.
                            </p>
                        </div>
                        <div class="col-6 amenidades__opciones">
                            <figure>
                                <img src="{{ asset('img/domen/delimitacion-fisica.png') }}" width="50" height="50"
                                    alt="" />
                            </figure>
                            <h5>Mojoneras</h5>
                            <p>
                                Delimitación física con mojoneras frontales.
                            </p>
                        </div>
                        <div class="col-12 amenidades__opciones">
                            <a href="" class="btn btn-success btn-block" type="button" data-toggle="modal"
                                data-target="#exampleModal">DESCARGAR BROCHURE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="amenidades mt-5">
        <div class="container">
            <div class="certeza__titular text-center pb-4">
                <h3>ASÍ ES CIUDAD CENTRAL PROGRESO</h3>
                <p>Cuenta con Casas Club distribuidas dentro del proyecto para uso y beneficio exclusivo de sus habitantes.
                </p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('img/domen/ccp-1.png') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/domen/ccp-2.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/domen/ccp-3.jpg') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/domen/ccp-4.jpg') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/domen/ccp-5.png') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="mapa-desarrollo mt-5">
        <div class="bg-cc_master">
            <div class="container mapa-desarrollo__master">
                <h3 class="text-center pb-4" style="font-weight: 700;">
                    UN DESARROLLO TOTALMENTE PLANEADO
                </h3>
                <figure class="master text-center">
                    <img src="{{ asset('img/CCP MASTER.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
        </div>
    </section>
    <section class="recorrido">
        <iframe src="https://eva3d.com/realidad-virtual/recorridos-virtuales/club-de-playa-orve/index.htm" width="100%"
            height="100%"></iframe>
    </section>
@endsection
