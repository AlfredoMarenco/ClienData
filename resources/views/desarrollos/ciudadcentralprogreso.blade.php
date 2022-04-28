@extends('layouts.template')

@section('header1')
    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
            <img src="{{ asset('img/logoCiudadCentral.svg') }}" class="w-full object-center object-cover lg:object-contain"
                alt="">
        </div>
    </main>
@endsection

@section('header2')
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 p-6">
        {{-- <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
src="{{ asset('img/header-2.jpg') }}" alt=""> --}}
        @php
            $rand = random_int(1, 6);
        @endphp
        {{-- <img class="h-56 w-full object-containt p-6 sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('img/masterplanes/ccmerida/masterplan.jpg') }}"
            alt=""> --}}
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/cxcFQWZ-sq8" title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
@endsection

@section('content')
    <section class="border-t-4 border-b-4 border-verde bg-verde">
        <div class="grid grid-cols-2 items-center">
            <div><img src="{{ asset('img/CCP1.png') }}" class="w-full object-containt headline" alt="">
            </div>
            <div class="bg-verde p-8">
                <h2 class="text-5xl font-bold text-white text-center headline">
                    AMENIDADES DEL PROYECTO
                </h2>
                <ol class="list-decimal p-8 mt-6 ml-4 text-2xl text-white font-semibold headline">
                    <li>Casa Club.</li>
                    <li>Alumbrado público.</li>
                    <li>Agua potable.</li>
                    <li>Banquetas.</li>
                    <li>Energía Electrica.</li>
                    <li>Calle pavimentada</li>
                    <li>Tratamiento individual de aguas residuales.</li>
                    <li>Club de playa y más...</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="border-t-4 border-b-4 border-verde">
        <div class="grid grid-cols-1">
            <div class="bg-black p-8">
                <h2 class="text-5xl font-bold text-white text-center headline">
                    CONOCE NUESTRO MASTER PLAN
                </h2>
            </div>
            <div class="bg-black">
                <img src="{{ asset('img/CCP4.jpg') }}"
                    class="w-full object-cover mx-auto headline mb-6 px-6" alt="">
            </div>
        </div>
    </section>
    <section>
        <div class="text-center pt-10">
            <h1 class="font-bold text-5xl">RECORRIDO VIRTUAL - CLUB DE PLAYA</h1>
        </div>
        <iframe src="https://eva3d.com/realidad-virtual/recorridos-virtuales/club-de-playa-orve/index.htm"
            class="w-full object-contain p-20 h-screen"></iframe>
    </section>

    <section id="contacto">
        <div class="grid md:grid-cols-2">
            <div class="flex items-center bg-white p-10 text-center">
                <div>
                    <h2 class="text-4xl tracking-tight font-extrabold text-black sm:text-5xl md:text-6xl headline mb-4">
                        Contacto</h2>
                    <p class="mt-2 ml-16 text-base text-black">Llena el siguente formulario y uno de nuestros
                        asesores se pondra en contacto a la brevedad para
                        brindarte toda la informacion sobre nuestros desarrollos.</p>
                </div>
            </div>
            <div class="p-12 bg-verde">
                <form action="{{ route('form.leads') }}" method="POST">
                    @csrf
                    <x-jet-input type="hidden" class="w-full" name="user_id" value="3"></x-jet-input>
                    <x-jet-input type="hidden" class="w-full" name="status_id" value="1"></x-jet-input>
                    <div class="my-3">
                        <label class="text-white font-semibold">Nombre:</label>
                        <x-jet-input type="text" class="w-full" name="name" value="{{ old('name') }}">
                        </x-jet-input>
                        @error('name')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label class="text-white font-semibold">Apellidos:</label>
                        <x-jet-input type="text" class="w-full" name="last_name" value="{{ old('last_name') }}">
                        </x-jet-input>
                        @error('last_name')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label class="text-white font-semibold">Correo:</label>
                        <x-jet-input type="text" class="w-full" name="email" value="{{ old('email') }}">
                        </x-jet-input>
                        @error('email')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label class="text-white font-semibold">Telefono:</label>
                        <x-jet-input type="text" class="w-full" name="phone" value="{{ old('phone') }}">
                        </x-jet-input>
                        @error('phone')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label class="text-white font-semibold">Me interesa:</label>
                        <select class="rounded-lg py-2 w-full border border-gray-200" name="development_id">
                            @foreach ($developments as $development)
                                <option value="{{ $development->id }}">{{ $development->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-start my-3">
                        <label class="text-white font-semibold">
                            <x-jet-input type="checkbox" class="mr-2" name="policy"></x-jet-input>
                            He leido <a href="" class="text-gray-700">aviso de privacidad.</a> y estor de
                            acuerdo
                        </label>
                    </div>
                    @error('policy')
                        <span class="text-xs text-red-700">{{ $message }}</span>
                    @enderror
                    <div class="flex items-start my-3">
                        <label class="text-white font-semibold">
                            <x-jet-input type="checkbox" class="mr-2" name="marketing"></x-jet-input>
                            Acepto que <b>Terrenos MID</b> pueda usar mis datos para marketing y envio de
                            promociones.
                        </label>
                    </div>
                    @error('marketing')
                        <span class="text-xs text-red-700">{{ $message }}</span>
                    @enderror
                    <div class="my-3">
                        <button type="submit"
                            class="w-full flex items-center justify-center px-8 py-2 border border-transparent text-base font-medium rounded-md text-white bg-black hover:bg-white hover:text-black md:py-2 md:text-lg md:px-10">
                            Enviar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
