@extends('layouts.guest-landing')
@push('css')
    <link rel="stylesheet" href="css/marketing.css">
@endpush
@section('content')

    <header>
        <div class="container">
            <div class="cabecera-marketing">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 m-auto">
                        <h1 class="text-left">¿Que elementos componen el Marketing Gastronómico?</h1>
                        <p class="detalles">
                            <small >Escrito por: Alvar Buenfil 
                                <a href="https://www.instagram.com/vandumx" target="_blank" style="padding-left: 2px;"><i
                                    class="fab fa-instagram" style="font-size: 12px;">
                                </i>
                                alvarsino
                                </a>    
                            </small> 
                            <br>
                            <small > Actualizado el 18 de Julio del 2023</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="contenido">
       <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <figure>
                    <img src="{{ asset('img/2023/entradas/sushi.jpeg') }}" alt="" class="img-fluid">
                </figure>
            </div>
        </div>
       </div>
    </div>
@endsection
