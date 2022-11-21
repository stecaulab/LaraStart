<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="Prodotti da agricoltura biologica. Recuperare campi ed orti in disuso coltivando in maniera sostenibile,
                        creando una vera e propria collaborazione con la natura che ci permette di arricchire il terreno,
                        nutrendolo e stimolandone la biodiversità, in modo da lasciare un domani un posto ancor migliore in cui vivere.">
    <meta name="keywords"
        content="Zafferano,Miele,Aceto di mele, Ristoranti, val mastallone, piemonte, vercelli,agricoltura biologica,agricoltura sostenibile,nosuggio,cravagliana,biodiversità,">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ env('APP_NAME') }} - @yield('title') </title>


    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/base.css">

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;400;700;800&display=swap" rel="stylesheet">





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
