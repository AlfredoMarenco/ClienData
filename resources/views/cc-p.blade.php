@extends('layouts.terrenos')
@section('content')
<header class="inicio-1">
  <div class="container">
    <div class="inicio__titular text-center">
      <h1>ciudad central progreso</h1>
      <p>
        Terrenos residenciales con el respaldo de años y años de
        experiencia.
      </p>
      <button class="btn btn-primary my-2 my-sm-0" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="text-transform: uppercase">
        <img src="/img/hojita.svg" width="15" /><span class="pl-2 m-auto"
          >Hablar con un asesor</span
        >
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
        <button href="" class="btn btn-primary" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">CONTACTAR A UN ASESOR</button>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
        <figure>
          <img
            src="/img/puntos.png"
            class="img-fluid"
            alt="Logo Ciudad Central Mérida"
          />
        </figure>
      </div>
    </div>
  </div>
</section>
<section class="amenidades">
  <div class="container">
    <div class="certeza__titular text-center pb-4">
      <h5>lorem ipsum dolor sit a met</h5>
      <h3>INVERTIR EN YUCATÁN ES ADELANTARSE AL FUTURO</h3>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
        <figure>
          <img
            src="/img/mapa.png"
            class="img-fluid"
            alt="Logo Ciudad Central Mérida"
          />
        </figure>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
        <div class="row">
          <div class="col-6 amenidades__opciones">
            <figure>
              <img src="" width="50" height="50" alt="" />
            </figure>
            <h5>lorem ipsum</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
              urna eu non proin. 
            </p>
          </div>
          <div class="col-6 amenidades__opciones">
            <figure>
              <img src="" width="50" height="50" alt="" />
            </figure>
            <h5>lorem ipsum</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
              urna eu non proin. 
            </p>
          </div>
          <div class="col-6 amenidades__opciones">
            <figure>
              <img src="" width="50" height="50" alt="" />
            </figure>
            <h5>lorem ipsum</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
              urna eu non proin.
            </p>
          </div>
          <div class="col-6 amenidades__opciones">
            <figure>
              <img src="" width="50" height="50" alt="" />
            </figure>
            <h5>lorem ipsum</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
              urna eu non proin.
            </p>
          </div>
        </div>
      </div>
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
          <img src="/img/masterplan.png" alt=""  class="img-fluid">
      </figure>
      </div>
  </div>
</section>
<section class="recorrido">
  <iframe src="https://eva3d.com/realidad-virtual/recorridos-virtuales/ciudad-central/index.htm" width="100%" height="100%"></iframe>
</section>
@endsection