<div class="header w-full fixed top-0 left-0 flex mx-auto justify-between">
    {{-- <div class="logo">
        <img src="/img/logoVM_small.png" alt="">
    </div> --}}
    <ul class="menu md:flex reveal items-center">
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ (request()->is('home')) ? 'actived hvr-underline-from-center-attiva' : '' }}" href="">Home</a></li>
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ (request()->is('prodotti')) ? 'actived' : '' }}" href="">Prodotti</a></li>
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ (request()->is('creazioni')) ? 'actived' : '' }}" href="">Creazioni</a></li>
        <li><a class="text-white md:text-black uppercase hvr-underline-from-center {{ (request()->is('contatti')) ? 'actived' : '' }}" href="">Contatti</a></li>
    </ul>
    <div class="logo">
        <img src="/img/logo_VM.svg" alt="AziendaAgricolaValMastallone(VC)">
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
<div class="hero relative">
    <div class="hero__content reveal">
        {{-- <p class=" font-bold uppercase mt-20 md:text-2xl md:mt-12 ">Agricoltura Sostenibile</p> --}}
        <p class=" relative text-4xl  md:text-6xl md:leading-relaxed pr-2.5 pl-2.5 text-white ">
            “Credo che avere la terra e non rovinarla <br>
            sia la più bella forma d'arte <br>
             che si possa desiderare” <br>
          
            <span class="text-base absolute mt-5 md:pos-top3 md:pos-left3 "> - Andy Warhol - </span> 

        </p> 
        
    </div>
    <video autoplay  muted loop id="video-back" class="max-w-none">
         <source src="/img/CoverVideo.mp4" type="video/mp4">
    </video>
</div>