<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="L'Azienda Agricola Valmastallone nasce con lo scopo di recuperare campi ed orti in disuso coltivando in maniera sostenibile.">
    <meta name="keywords"
        content="Zafferano,Miele,Aceto di mele, Ristoranti, val mastallone, piemonte, vercelli,agricoltura biologica,agricoltura sostenibile,nosuggio,cravagliana,biodiversità,sfere allo zafferano">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" hreflang="x-default" href="https://stefanocauzzi.it/home" />
    <link rel="canonical" href="https://stefanocauzzi.it/prodotti" />

    <title> @yield('title') - {{ env('APP_NAME') }}</title>


    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/base.css">

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap"
        rel="stylesheet">





    <!-- Scripts js -->

    <script src="/js/app.js" defer></script>
    <script src="/js/function.js" defer></script>
    <script src="https://kit.fontawesome.com/1b8cb35519.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>

</head>

<body class="h-full">
    <main>
        {{ $slot }}
    </main>

</body>

{{-- ADD JQUERY CDN --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>
