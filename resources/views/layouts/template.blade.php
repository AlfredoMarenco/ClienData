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

    <!-- Messenger plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "412752102892086");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>

<body class="antialiased">
    <header>
        <div class="relative bg-black overflow-hidden" x-data="{ open: false }" id="inicio">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-black sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <div>
                        <div class="relative pt-6 px-4 sm:px-6 lg:px-2">
                            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                                aria-label="Global">
                                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                    <div class="flex items-center justify-between w-full md:w-auto">
                                        <a href="#">
                                            <span class="sr-only">Workflow</span>
                                            <img class="w-48" src="{{ asset('img/logoTerrenosMid.svg') }}">
                                        </a>
                                        <div class="-mr-2 flex items-center md:hidden">
                                            <button x-on:click="open=!open" type="button"
                                                class="bg-black rounded-md p-2 inline-flex items-center justify-center text-gray-100 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
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
                                    <a href="{{ route('home') }}" class="font-medium text-white hover:text-gray-100">Inicio</a>
                                    <a href="#desarrollos"
                                        class="font-medium text-white hover:text-gray-100">Desarrollos</a>
                                    <a href="#contacto" class="font-medium text-white hover:text-gray-100">Contacto</a>
                                </div>
                            </nav>
                        </div>
                        <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
                            x-show="open">
                            <div class="rounded-lg shadow-md bg-black ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="px-5 pt-4 flex items-center justify-between">
                                    <div>
                                        <img class="h-12 w-auto" src="{{ asset('img/logoTerrenosMid.svg') }}"
                                            alt="">
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
                                    <a href="{{ route('home') }}"
                                        class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-900 hover:bg-gray-50">Inicio</a>
                                    <a href="#desarrollos"
                                        class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-900 hover:bg-gray-50">Desarrollos</a>
                                    <a href="#contacto"
                                        class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-900 hover:bg-gray-50">Contacto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('header1')
                </div>
            </div>
            @yield('header2')
        </div>
    </header>
    @yield('content')

    <footer class="text-gray-600 body-font bg-black">
        <div
            class="container px-5 py-14 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-80 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img src="{{ asset('img/logoTerrenosMid.svg') }}" class="w-80" alt="">
                </a>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-bold text-gray-100 tracking-widest text-md mb-3">Sitio</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-300 hover:text-verde" href="#inicio">Inicio</a>
                        </li>
                        <li>
                            <a class="text-gray-300 hover:text-verde" href="#desarrollos">Desarrollos</a>
                        </li>
                        <li>
                            <a class="text-gray-300 hover:text-verde" href="#contacto">Contacto</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-bold text-gray-100 tracking-widest text-md mb-3">Desarrollos</h2>
                    <nav class="list-none mb-10">
                        {{-- @foreach ($developments as $development)
                        <li>
                            <a class="text-gray-300 hover:text-verde" href="#">{{ $development->name }}</a>
                        </li>
                    @endforeach --}}
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-black">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-400 text-sm text-center sm:text-left">Todos los derecho reservados © 2022 Sistema
                    desarrollado por —
                    <a href="https://www.linkedin.com/in/alfredo-gonzález-marenco/" rel="noopener noreferrer"
                        class="text-gray-500 ml-1" target="_blank">Alfredo González Marenco</a>
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
