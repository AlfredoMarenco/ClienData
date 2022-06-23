@extends('layouts.terrenos')
@section('content')
<header class="inicio">
    <div class="container">
        <div class="inicio__titular text-center">
            <h1>
                TerrenosMID inversión inteligente
            </h1>
            <p>Nuestro grupo de expertos te ayudará a descubrir los proyectos que mejor se adecúen a tu estilo de vida.</p>
            <a class="btn btn-primary my-2 my-sm-0" style="text-transform: uppercase;">
                <img src="/img/hojita.svg" width="15"><span class="pl-2 m-auto">Hablar con un asesor</span>
            </a>
        </div>
    </div>
</header>
<section class="tipos-de-desarrollos">
    <div class="container">
        <div class="tipos-de-desarrollos__titular text-center">
            <h5>
                lorem ipsum dolor sit a met
            </h5>
            <h3>
                lorem ipsum dolor sit a met
            </h3>
        </div>
        <div class="tipos-de-desarrollos__caracteristicas">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <figure>
                        <img src="/img/hojita.svg" width="30" style="background-color: gray;"  alt="">
                    </figure>
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dolorem.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <figure>
                        <img src="/img/hojita.svg" width="30" style="background-color: gray;"  alt="">
                    </figure>
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dolorem.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <figure>
                        <img src="/img/hojita.svg" width="30" style="background-color: gray;"  alt="">
                    </figure>
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dolorem.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <figure>
                        <img src="/img/hojita.svg" width="30" style="background-color: gray;"  alt="">
                    </figure>
                    <h5>Lorem Ipsum</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dolorem.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="desarrollos">
    <!-- CCM -->
    <div class="bg-cc">
        <div class="container desarrollos__merida">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <figure>
                        <img src="/img/cc-m-logo.svg" class="img-fluid" alt="Logo Ciudad Central Mérida">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 desarrollos__descripcion">
                    <h6>Terrenos residenciales</h6>
                    <h3>Ciudad Central Mérida</h3>
                    <p>Ubicado al noreste de Mérida, Ciudad Central tiene para ti los terrenos residenciales ideales para comenzar tu inversión, proyectados a 4 años en su entrega. <br> <br>
                    Cada lote será proporcionado con todos los servicios subterráneos, una cualidad que tienen las comunidades planeadas a la vanguardia. 
                    </p>
                    <a href="" class="btn btn-primary">CONOCE EL DESARROLLO</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end CCM -->
    <!-- CCP -->
    <div class="container desarrollos__merida">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 desarrollos__descripcion">
                <h6>Lo mejor de dos mundos</h6>
                <h3>Ciudad Central Progreso</h3>
                <p>Ubicado al noreste de Mérida, Ciudad Central tiene para ti los terrenos residenciales ideales para comenzar tu inversión, proyectados a 4 años en su entrega. <br> <br>
                Cada lote será proporcionado con todos los servicios subterráneos, una cualidad que tienen las comunidades planeadas a la vanguardia. 
                </p>
                <a href="" class="btn btn-primary">CONOCE EL DESARROLLO</a>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                <figure>
                    <img src="/img/cc-logo-p.png" class="img-fluid" alt="Logo Ciudad Central Mérida">
                </figure>
            </div>
        </div>
    </div>
    <!-- end CCP -->
</section>
<section class="certeza">
    <div class="container">
        <div class="certeza__titular text-center">
            <h5>
                lorem ipsum dolor sit a met
            </h5>
            <h3>
                INVERTIR EN YUCATÁN ES ADELANTARSE AL FUTURO
            </h3>
            <p>
                Ya que el valor de la tierra se encuentra en franco crecimiento como lo estuvieron CDMX, Querétaro o Monterrey en el pasado, por nombrar algunos ejemplos, por lo que el valor de tu inversión no puede más que aumentar durante los próximos años. Yucatán es reconocido por ser hogar de grandes industrias locales, nacionales y extranjeras que hacen de su crecimiento económico la columna vertebral de grandes proyectos.
                <br> <br>
                Por mencionar algunos: - Parque Eólico de Progreso - Planta Fotovoltaica San Ignacio - FINCANTIERI - Ampliación y modernización del Puerto Aduanal - Amazon - Walmart - PCC Airfoils - Nuevo Estadio Sostenible de Yucatán.
            </p>
        </div>
        
    </div>
</section>
@endsection