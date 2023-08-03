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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Contacta con un asesor - Vandu</title>
    <meta property="og:title" content="Contacta con un asesor &mdash; Vandu">
    <meta property="og:type" content="website" />
    <meta name="description"
        content="Nuestro enfoque es simple pero revolucionario: ofrecemos soluciones digitales que cautivan, inspiran y generan resultados extraordinarios. Si buscas una agencia que eleve tu presencia en línea a niveles insuperables, te invitamos a unirte a nosotros en el viaje hacia el éxito digital." />
    <meta name="og:description"
        content="Nuestro enfoque es simple pero revolucionario: ofrecemos soluciones digitales que cautivan, inspiran y generan resultados extraordinarios. Si buscas una agencia que eleve tu presencia en línea a niveles insuperables, te invitamos a unirte a nosotros en el viaje hacia el éxito digital." />
    <meta name="og:url" content="https://www.agenciavandu.com" />
    <meta name="og:site_name" content="Vandu" />
    <meta name="og:image" content="https://agenciavandu.com/img/1.jpg" />
    <meta name="facebook-domain-verification" content="f1h8rt3r949cfydn9bzpxdwgx9a4ah" />
    <!-- Styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Fonts -->
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d63ca50714.js" crossorigin="anonymous"></script>




    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '331856211230776');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=331856211230776&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    {!! htmlScriptTagJsApi() !!}

    <script type="text/javascript">
        function callbackThen(
            response
        ) { // read HTTP status console.log(response.status); // read Promise object response.json().then(function(data){ console.log(data); }); } function callbackCatch(error){ console.error('Error:', error) }
    </script>
    {!! htmlScriptTagJsApi(['callback_then' => 'callbackThen', 'callback_catch' => 'callbackCatch']) !!}
</head>

<body>
    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

   
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141381231-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-141381231-2');
    </script>

    <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/40223801.js"></script>
<!-- End of HubSpot Embed Code -->
</body>

</html>
