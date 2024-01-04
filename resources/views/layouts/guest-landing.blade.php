<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="preload" href="https://www.googletagmanager.com/gtag/js?id=G-C3B9DFX1T8" as="script">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C3B9DFX1T8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-C3B9DFX1T8');
    </script>

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" as="styles">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preload" href="css/estilos.css" as="styles">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preload" href="" as="styles">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" as="font" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- end styles --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vandu - Agencia de Desarrollo web y Diseño en Mérida</title>
    <link rel=»canonical» href=»http://www.agenciavandu.com» />
    <meta property="og:title" content="Agencia de Desarrollo web y Diseño en Mérida &mdash; Vandu">
    <meta property="og:type" content="website" />
    <meta name="description" content="Nuestro enfoque es simple pero revolucionario: ofrecemos soluciones digitales que cautivan, inspiran y generan resultados extraordinarios. Si buscas una agencia que eleve tu presencia en línea a niveles insuperables, te invitamos a unirte a nosotros en el viaje hacia el éxito digital." />
    <meta name="og:description" content="Nuestro enfoque es simple pero revolucionario: ofrecemos soluciones digitales que cautivan, inspiran y generan resultados extraordinarios. Si buscas una agencia que eleve tu presencia en línea a niveles insuperables, te invitamos a unirte a nosotros en el viaje hacia el éxito digital." />
    <meta name="og:url" content="https://www.agenciavandu.com" />
    <meta name="og:site_name" content="Vandu" />
    <meta name="og:image" content="https://agenciavandu.com/img/1.jpg" />
    <meta name="facebook-domain-verification" content="f1h8rt3r949cfydn9bzpxdwgx9a4ah" />
    <meta name="robots" content="index" />
    <!-- Styles -->
    @stack('css')
    <!-- Fonts -->
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="https://kit.fontawesome.com/d63ca50714.js" crossorigin="anonymous"></script>



    {!! htmlScriptTagJsApi() !!}

    <script type="text/javascript">
        function callbackThen(
            response
        ) // read HTTP status console.log(response.status); // read Promise object response.json().then(function(data){ console.log(data); }); } function callbackCatch(error){ console.error('Error:', error) }
    </script>
    {!! htmlScriptTagJsApi(['callback_then' => 'callbackThen', 'callback_catch' => 'callbackCatch']) !!}
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-vandu fixed-top">
        <div class="container">
            <a class="navbar-brand img-fluid m-auto" href="/" aria-label="ir a página principal"><img src="img/2023/vandu-black.svg" alt="logotipo agencia vandu" width="100"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
   
    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 200, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>

</body>

</html>