<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> -{{ config('app.name') }}- @yield('title') </title>

     
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/base.css">
       

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;400;700;800&display=swap" rel="stylesheet"> 
        
                
                
                
        
        <!-- Scripts js -->

        <script src="/js/app.js" defer></script>
        <script src="/js/function.js" defer></script>
        <script src="https://kit.fontawesome.com/1b8cb35519.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <script src="https://player.vimeo.com/api/player.js"></script>
    
    </head>
    <body class="bg-white">
        {{ $slot }}
    </body>

    {{-- ADD JQUERY CDN --}}
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>