<header
    class="header top-0 left-0 z-50 flex fixed md:w-full md:z-40  md:top-0 md:left-0  md:mx-auto md:justify-between
    after:fixed after:top-0 after:left-0 after:h-32 after:w-full after:z-30
    after:bg-gradient-to-b from-[#ffffff] via-[#ffffff] to-transparent
  after:transition after:duration-500 after:ease-[cubic-bezier(0.215, 0.61, 0.355, 1)]
             md:after:absolute md:after:top-0 md:after:left-0 md:after:h-32 md:after:w-full md:after:z-30
              md:after:bg-gradient-to-b md:from-[#ffffff] md:via-[#e1e0dd] md:to-transparent
            md:after:transition md:after:duration-500 md:after:ease-[cubic-bezier(0.215, 0.61, 0.355, 1)]">
    <div class="container flex justify-between w-full  md:max-w-6xl md:mx-auto md:items-center">
        <div
            class="logo ml-4 invert-0 z-50 mt-3 transition-all duration-75 ease-[cubic-bezier(0.355, 0.61, 0.215, 1)]
                    md:ml-0 md:mt-3 md:z-50 md:transition-all md:duration-75 md:ease-[cubic-bezier(0.355, 0.61, 0.215, 1)">
            <a href="/home">
                <a href="/home">
                    <img src="/img/svg/logo_VM.svg" class="h-24 w-24">
                </a>

            </a>
        </div>
        <ul
            class="menu top-10 z-40 w-full bg-white left-0 fixed h-0 overflow-hidden transition-all duration-700 ease-[cubic-bezier(0.355, 0.61, 0.215, 1)]
                    md:static md:h-full md:max-w-2xl md:bg-transparent md:top-0 md:z-40 md:left-32
                    md:mt-3 md:flex md:items-center lg:flex lg:justify-center lg:max-w-screen-2xl">
            <li class="pt-24 pb-3 ml-9 md:top-0 md:ml-4 md:mr-4 md:pl-3 md:pr-3 md:pt-5 md:pb-0">
                <a class=" normal-case md:text-black md:uppercase hvr-underline-from-center {{ request()->is('home') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                    href="/home">Home</a>
            </li>
            <li class="pt-5 pb-3 ml-9 md:ml-4 md:mr-4 md:pl-3 md:pr-3 md:pb-0"><a
                    class="normal-case md:text-black md:uppercase hvr-underline-from-center {{ request()->is('prodotti') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                    href="/prodotti">Prodotti</a></li>
            <li class="  pt-5 pb-3 ml-9 md:ml-4 md:mr-4 md:pl-3 md:pr-3 md:pb-0"><a
                    class="normal-case md:text-black md:uppercase hvr-underline-from-center {{ request()->is('collaborazioni') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                    href="/collaborazioni">Collaborazioni</a></li>
            <li class="  pt-5 pb-3 ml-9 md:ml-4 md:mr-4 md:pl-3 md:pr-3 md:pb-0"><a
                    class="normal-case md:text-black md:uppercase hvr-underline-from-center {{ request()->is('contatti') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                    href="/contatti">Contatti</a></li>
        </ul>

        <div class="invisible">

            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="44" viewBox="0 0 15 44">
                <rect width="15" height="44" fill="none" />
                <path
                    d="M13.98,27.343l-3.5-3.5a5.436,5.436,0,1,0-.778.777l3.5,3.5a.55.55,0,1,0,.778-.778ZM1.959,20.418a4.319,4.319,0,1,1,4.319,4.32A4.323,4.323,0,0,1,1.959,20.418Z"
                    fill="#fff" />
            </svg>
        </div>
        <div class="hamburger relative h-12 w-12 top-10 left-48 z-50 mr-3 md:hidden  ">
            <span class="h-px w-7 mt-2 relative block bg-black"></span>
            <span class="h-px w-7 mt-2 relative block bg-black"></span>
            <span class="h-px w-7 mt-2 relative block bg-black"></span>
        </div>

    </div>
</header>
