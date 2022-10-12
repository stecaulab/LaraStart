@section('title')
    Home
@endsection

<div class="header w-full fixed top-0 left-0 flex mx-auto justify-between">


    <ul class="menu md:flex reveal items-center lg:max-w-screen-2xl">
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ request()->is('home') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                href="/home">Home</a></li>
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ request()->is('prodotti') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                href="/prodotti">Prodotti</a></li>
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ request()->is('collaborazioni') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                href="">Collaborazioni</a></li>
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ request()->is('contatti') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                href="/contatti">Contatti</a></li>
    </ul>
    <div class="logo">
        <a href="/home">
            <img src="/img/logo_VM.svg" alt="AziendaAgricolaValMastallone(VC)">
        </a>
    </div>
    <div class="cta flex items-center justify-end">

    </div>
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<div class="hero flex">
    <div class="hero__content reveal">
        {{-- <p class=" font-bold uppercase mt-20 md:text-2xl md:mt-12 ">Agricoltura Sostenibile</p> --}}
        <p class="text-lg mt-5 pr-2.5 pl-2.5 text-white md:text-6xl md:leading-relaxed">
            “Credo che avere la terra e non rovinarla <br>
            sia la più bella forma d'arte <br>
            che si possa desiderare” <br>

            <span class="text-base absolute mt-5 md:pos-top3 md:pos-left3 "> - Andy Warhol - </span>

        </p>

    </div>
    <video autoplay muted loop id="video-back" class="">
        <source src="/img/CoverVideo.mp4" type="video/mp4">
    </video>
</div>
