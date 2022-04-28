@extends('layouts.template')

@section('header1')
    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-100 sm:text-5xl md:text-6xl headline">
                <span class="block xl:inline">Con TERRENOSMID</span>
                <span class="block text-verde xl:inline">invertir es muy fácil</span>
            </h1>
            <p class="mt-3 text-base text-gray-100 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Nuestro grupo de expertos te ayudaran a tomar la mejor desición para la inversión de tu
                dinero.
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                    <a href="#contacto"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-verde hover:bg-white hover:text-black md:py-4 md:text-lg md:px-10">
                        Hablar con un asesor
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('header2')
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        @php
            $rand = random_int(1, 2);
        @endphp
        @if ($rand == 1)
            <img class="h-56 w-full object-containt sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="{{ asset('img/header1.jpg') }}" alt="">
        @else
            <video class="h-56 w-full object-containt sm:h-72 md:h-96 lg:w-full lg:h-full" autoplay muted>
                <source src="{{ asset('videos/index1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @endif
    </div>
@endsection
@section('content')
    <section class="py-12 bg-white shadow-lg border-t-4 border-b-4 border-verde">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 headline">
            <div class="lg:text-center">
                <h2 class="text-base text-verde font-semibold tracking-wide uppercase headline">Todo tipo de
                    desarrollos</h2>
                {{-- <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                En TERRENOSMID
            </p> --}}
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Contamos con los mejores desarrollos de la peninsula para que realices tu inversion sin la necesidad
                    de tener diferentes asesores de venta.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-verde text-white headline">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Todo en un solo lugar
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Aqui podras encontrar los desarrollos mas atractivos y con mejor rendimiendo de toda la
                            peninsula en un solo lugar.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-verde text-white headline">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">A tu medida</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Contamos con desarrollos para todo tipo de presupuestos, por lo que no tendras que acudir a
                            otros asesores para pedir mas información.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-verde text-white headline">
                                <!-- Heroicon name: outline/lightning-bolt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Personal capacitada
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Contamos con gente altamente capacitada para identificar tus necesidades y espectativas de
                            inversion, por lo que te ayudaran en todo momento a tomar la mejor desición.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-verde text-white headline">
                                <!-- Heroicon name: outline/annotation -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Atencion personalizada
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Asignamos a nuestros asesores tomando en cuenta tu perfil de inversion para brindarte la
                            mejor atencion y consigas terminar el dia con la inversion que tenias pensado.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>


    <section class="shadow-lg py-8 bg-black border-b-4 border-verde" id="desarrollos">
        <h2
            class="text-center text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl headline pt-4 mb-4">
            Desarrollos
        </h2>
        <div class="grid md:grid-cols-2 gap-4 place-items-center place-content-center mt-2">
            <div class="w-full text-center px-32 py-16 hover:bg-verde hover:shadow-lg cursor-pointer">
                <a href="{{ route('cdm') }}">
                    <img src="{{ asset('img/logoCiudadCentral.svg') }}" class="w-full mx-auto headline" alt="">
                </a>
            </div>
            <div class="w-full text-center px-32 py-16 hover:bg-verde hover:shadow-lg cursor-pointer">
                <a href="{{ route('cdp') }}">
                    <img src="{{ asset('img/logoCiudadCentralProgreso.svg') }}" class="w-full mx-auto headline" alt="">
                </a>
            </div>
        </div>
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
