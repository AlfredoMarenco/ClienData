<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    @livewireStyles
    @stack('css')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-208883762-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-208883762-1');
    </script>
</head>

<body class="antialiased">

    <header>
        <div class="relative bg-white overflow-hidden" x-data="{open:false}" id="inicio">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                        fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                    <div>
                        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                                aria-label="Global">
                                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                    <div class="flex items-center justify-between w-full md:w-auto">
                                        <a href="#">
                                            <span class="sr-only">Workflow</span>
                                            <img class="w-40" src="{{ asset('img/logoTerrenos.svg') }}">
                                        </a>
                                        <div class="-mr-2 flex items-center md:hidden">
                                            <button x-on:click="open=!open" type="button"
                                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                                aria-expanded="false">
                                                <span class="sr-only">Open main menu</span>
                                                <!-- Heroicon name: outline/menu -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                                    <a href="#inicio" class="font-medium text-gray-500 hover:text-gray-900">Inicio</a>
                                    <a href="#desarrollos"
                                        class="font-medium text-gray-500 hover:text-gray-900">Desarrollos</a>
                                    <a href="#contacto"
                                        class="font-medium text-gray-500 hover:text-gray-900">Contacto</a>
                                </div>
                            </nav>
                        </div>
                        <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
                            x-show="open">
                            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="px-5 pt-4 flex items-center justify-between">
                                    <div>
                                        <img class="h-8 w-auto"
                                            src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                                    </div>
                                    <div class="-mr-2">
                                        <button x-on:click="open=!open" type="button"
                                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                            <span class="sr-only">Close main menu</span>
                                            <!-- Heroicon name: outline/x -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="px-2 pt-2 pb-3 space-y-1">
                                    <a href="#inicio"
                                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Inicio</a>
                                    <a href="#desarrollos"
                                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Desarrollos</a>
                                    <a href="#contacto"
                                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Contacto</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1
                                class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl headline">
                                <span class="block xl:inline">Con Terrenos MID</span>
                                <span class="block text-green-800 xl:inline">invertir es muy facil</span>
                            </h1>
                            <p
                                class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                Nuestro grupo de expertos te ayudara a tomar la mejor desicion para la inversion de tu
                                dinero.
                            </p>
                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-md shadow">
                                    <a href="#contacto"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-700 hover:bg-green-600 md:py-4 md:text-lg md:px-10">
                                        Hablar con un asesor
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                    src="{{ asset('img/header-2.jpg') }}" alt="">
            </div>
        </div>
    </header>



    <section class="py-12 bg-gray-100 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 headline">
            <div class="lg:text-center">
                <h2 class="text-base text-green-700 font-semibold tracking-wide uppercase headline">Todo tipo de
                    desarrollos</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    En Terrenos MID
                </p>
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
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-700 text-white headline">
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
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-700 text-white headline">
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
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-700 text-white headline">
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
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-700 text-white headline">
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


    <section class="shadow-lg py-8" id="desarrollos">
        <h2 class="text-center text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl headline ">
            Desarrollos
        </h2>
        <div class="grid md:grid-cols-3 gap-10 place-items-center place-content-center p-12 md:p-24 ">
            <div class="w-full text-center">
                <img src="{{ asset('img/logoPalumar.svg') }}" class="w-full mx-auto headline" alt="">
            </div>
            <div class="w-full text-center">
                <img src="{{ asset('img/logoCiudadCentral.svg') }}" class="w-full mx-auto headline" alt="">
            </div>
            <div class="w-full">
                <img src="{{ asset('img/logoSantarena.svg') }}" class="w-full mx-auto headline" alt="">
            </div>
            <div class="w-full">
                <img src="{{ asset('img/logoAlea.svg') }}" class="w-1/2 mx-auto headline" alt="">
            </div>
            <div class="w-full">
                <img src="{{ asset('img/logoModena.svg') }}" class="w-full mx-auto headline" alt="">
            </div>
            <div class="w-full">
                <img src="{{ asset('img/logoSorena.svg') }}" class="w-full mx-auto headline" alt="">
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="grid md:grid-cols-2">
            <div class="flex items-center bg-green-700 p-10 text-center">
                <div>
                    <h2 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl headline mb-4">
                        Contacto</h2>
                    <p class="mt-2 ml-16 text-base text-gray-100">Llena el siguente formulario y uno de nuestros
                        asesores se pondra en contacto a la brevedad para
                        brindarte toda la informacion sobre nuestros desarrollos.</p>
                </div>
            </div>
            <div class="p-12">
                <form action="{{ route('form.leads') }}" method="POST">
                    @csrf
                    <x-jet-input type="hidden" class="w-full" name="user_id" value="3"></x-jet-input>
                    <x-jet-input type="hidden" class="w-full" name="status_id" value="1"></x-jet-input>
                    <div class="my-3">
                        <x-jet-label>Nombre:</x-jet-label>
                        <x-jet-input type="text" class="w-full" name="name" value="{{ old('name') }}">
                        </x-jet-input>
                        @error('name')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <x-jet-label>Apellidos:</x-jet-label>
                        <x-jet-input type="text" class="w-full" name="last_name"
                            value="{{ old('last_name') }}"></x-jet-input>
                        @error('last_name')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <x-jet-label>Correo:</x-jet-label>
                        <x-jet-input type="text" class="w-full" name="email" value="{{ old('email') }}">
                        </x-jet-input>
                        @error('email')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <x-jet-label>Telefono:</x-jet-label>
                        <x-jet-input type="text" class="w-full" name="phone" value="{{ old('phone') }}">
                        </x-jet-input>
                        @error('phone')
                            <span class="text-xs text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <x-jet-label>Me interesa:</x-jet-label>
                        <select class="rounded-lg py-2 w-full border border-gray-200" name="development_id">
                            @foreach ($developments as $development)
                                <option value="{{ $development->id }}">{{ $development->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-start my-3">
                        <x-jet-label>
                            <x-jet-input type="checkbox" class="mr-2" name="policy"></x-jet-input>
                            He leido <a href="" class="text-green-700">aviso de privacidad.</a> y estor de
                            acuerdo
                        </x-jet-label>
                    </div>
                    @error('policy')
                        <span class="text-xs text-red-700">{{ $message }}</span>
                    @enderror
                    <div class="flex items-start my-3">
                        <x-jet-label>
                            <x-jet-input type="checkbox" class="mr-2" name="marketing"></x-jet-input>
                            Acepto que <b>Terrenos MID</b> pueda usar mis datos para marketing y envio de
                            promociones.
                        </x-jet-label>
                    </div>
                    @error('marketing')
                        <span class="text-xs text-red-700">{{ $message }}</span>
                    @enderror
                    <div class="my-3">
                        <button type="submit"
                            class="w-full flex items-center justify-center px-8 py-2 border border-transparent text-base font-medium rounded-md text-white bg-green-700 hover:bg-green-600 md:py-2 md:text-lg md:px-10">
                            Enviar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </section>


    <footer class="text-gray-600 body-font bg-gray-900">
        <div
            class="container px-5 py-14 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img src="{{ asset('img/logoTerrenosFooter.svg') }}" class="w-56" alt="">
                </a>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-bold text-gray-100 tracking-widest text-md mb-3">Sitio</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-300 hover:text-green-300" href="#inicio">Inicio</a>
                        </li>
                        <li>
                            <a class="text-gray-300 hover:text-green-300" href="#desarrollos">Desarrollos</a>
                        </li>
                        <li>
                            <a class="text-gray-300 hover:text-green-300" href="#contacto">Contacto</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-bold text-gray-100 tracking-widest text-md mb-3">Desarrollos</h2>
                    <nav class="list-none mb-10">
                        @foreach ($developments as $development)
                            <li>
                                <a class="text-gray-300 hover:text-green-300" href="#">{{ $development->name }}</a>
                            </li>
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-black">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-400 text-sm text-center sm:text-left">Todos los derecho reservados © 2021 Sistema
                    desarrollado por —
                    <a href="https://www.linkedin.com/in/alfredo-gonzález-marenco/" rel="noopener noreferrer"
                        class="text-gray-500 ml-1" target="_blank">Alfredo Gonzalez Marenco</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-200" href="https://www.facebook.com/terrenosmidyucatan/">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-200" href="https://www.instagram.com/terrenosmidyucatan/">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>

    <script>
        ScrollReveal().reveal('.headline', {
            duration: 1000,
            delay: 300,
            origin: 'bottom',
            distance: '300px'
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    <script>
        $(function() {
            @if (session()->has('retorno'))
                $('html, body').animate({
                scrollTop: $("#contacto").offset().top
                }, 2000);
            @endif
        });
    </script>
    @include('sweetalert::alert')

</body>

</html>
