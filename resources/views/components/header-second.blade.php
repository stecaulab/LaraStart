@section('title')Prodotti @endsection
<div class="attiva header w-full fixed top-0 left-0 flex mx-auto justify-between">
    <ul class="menu md:flex reveal items-center">
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ (request()->is('home')) ? 'actived hvr-underline-from-center-attiva' : '' }}" href="/home">Home</a></li>
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ (request()->is('prodotti')) ? 'actived hvr-underline-from-center-attiva' : '' }}" href="/prodotti">Prodotti</a></li>
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ (request()->is('creazioni')) ? 'actived hvr-underline-from-center-attiva' : '' }}" href="">Creazioni</a></li>
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ (request()->is('contatti')) ? 'actived hvr-underline-from-center-attiva' : '' }}" href="/contatti">Contatti</a></li>
    </ul>
    <div class="logo1">
        <a href="/home">
            <img src="/img/logo_VM.svg" alt="AziendaAgricolaValMastallone(VC)">
        </a>
    </div>
    <div class="cta flex items-center justify-end">
        {{-- <span class="inline-block mr-5 opacity-0">
            <a class ="  hover:text-white p-2"  href=""><i class="fab fa-facebook-f fa-lg"></i></a>
            <a class ="  hover:text-white p-2"  href=""><i class="fab fa-instagram fa-lg"></i></a>
            <a class ="  hover:text-white p-2"  href=""><i class="fab fa-whatsapp  fa-lg"></i></a>
        </span> --}}

    </div>
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
