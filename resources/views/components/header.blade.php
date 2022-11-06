@section('title')
    Home
@endsection

<header
    class="header top-0 left-0 z-50 flex fixed md:w-full md:z-40  md:top-0 md:left-0  md:mx-auto md:justify-between
    after:fixed after:top-0 after:left-0 after:h-32 after:w-full after:z-30 
    after:bg-gradient-to-b from-[#ffffff] via-[#ffffff] to-transparent
  after:transition after:duration-500 after:ease-[cubic-bezier(0.215, 0.61, 0.355, 1)]
             md:after:absolute md:after:top-0 md:after:left-0 md:after:h-32 md:after:w-full md:after:z-30 
              md:after:bg-gradient-to-b md:from-[#d1d0cc] md:via-[#e1e0dd] md:to-transparent
            md:after:transition md:after:duration-500 md:after:ease-[cubic-bezier(0.215, 0.61, 0.355, 1)]">
    <div class="container flex justify-between w-full  md:max-w-6xl md:mx-auto md:items-center">
        <div
            class="logo ml-4 invert-0 z-50 mt-3 transition-all duration-75 ease-[cubic-bezier(0.355, 0.61, 0.215, 1)]
                    md:ml-0 md:mt-3 md:z-50 md:transition-all md:duration-75 md:ease-[cubic-bezier(0.355, 0.61, 0.215, 1)">
            <a href="/home">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70.000000pt" height="70.000000pt"
                    viewBox="0 0 198.000000 198.000000" preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,198.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path
                            d="M823 1935 c-205 -37 -381 -132 -525 -283 -167 -176 -252 -374 -265
               -617 -14 -275 83 -523 281 -721 103 -102 176 -153 287 -201 522 -226 1120 37
               1298 572 92 277 53 590 -104 830 -60 92 -207 234 -304 293 -197 120 -445 168
               -668 127z m417 -35 c314 -89 572 -348 662 -665 20 -69 23 -102 22 -245 0 -138
               -4 -178 -22 -245 -70 -254 -259 -482 -497 -600 -146 -72 -221 -89 -415 -89
               -143 -1 -176 2 -245 22 -317 90 -577 348 -665 662 -33 114 -38 316 -12 440 75
               363 360 652 722 731 117 26 341 20 450 -11z" />
                        <path
                            d="M839 1905 c-97 -15 -235 -66 -319 -115 -238 -140 -404 -386 -446
               -662 -61 -395 143 -789 501 -966 242 -120 509 -131 761 -32 270 107 475 341
               551 628 42 159 37 356 -14 517 -26 83 -91 206 -151 284 -200 262 -553 400
               -883 346z m291 -16 c250 -40 476 -184 615 -394 64 -95 93 -161 125 -275 21
               -72 24 -107 24 -230 0 -123 -3 -158 -24 -230 -32 -114 -61 -180 -125 -275
               -312 -470 -971 -542 -1382 -152 -196 186 -295 437 -280 707 10 172 57 313 151
               453 143 216 370 358 636 400 52 9 198 6 260 -4z" />
                        <path
                            d="M887 1773 c-14 -13 -6 -42 13 -48 11 -3 20 -13 20 -22 0 -10 -6 -14
               -20 -10 -11 3 -20 1 -20 -5 0 -5 12 -8 28 -6 35 4 45 46 13 55 -24 6 -28 23
               -6 23 8 0 15 5 15 10 0 11 -33 14 -43 3z" />
                        <path
                            d="M1008 1768 c7 -7 12 -29 12 -50 0 -21 5 -38 10 -38 6 0 10 18 10 40
               0 29 4 40 15 40 8 0 15 5 15 10 0 6 -17 10 -37 10 -29 0 -34 -3 -25 -12z" />
                        <path
                            d="M766 1748 c-12 -37 -15 -98 -6 -98 5 0 10 6 10 14 0 21 23 25 43 8
               26 -23 21 2 -9 48 -29 44 -33 46 -38 28z m19 -38 c3 -5 1 -10 -4 -10 -6 0 -11
               5 -11 10 0 6 2 10 4 10 3 0 8 -4 11 -10z" />
                        <path
                            d="M1124 1719 c-25 -40 -26 -65 -2 -41 18 18 38 14 38 -8 0 -11 5 -20
               10 -20 11 0 13 52 4 88 -9 32 -20 28 -50 -19z" />
                        <path
                            d="M1249 1679 c-11 -23 -17 -45 -12 -49 14 -14 53 -22 53 -11 0 5 -9 12
               -20 16 -20 6 -20 6 0 46 11 21 16 39 10 39 -5 0 -19 -19 -31 -41z" />
                        <path
                            d="M643 1675 c6 -37 1 -38 -35 -8 -26 23 -31 -2 -8 -47 24 -46 35 -52
               25 -13 -6 26 -6 27 13 10 27 -25 35 -21 30 14 l-5 31 18 -23 c29 -39 33 -14 5
               30 -33 51 -51 54 -43 6z" />
                        <path
                            d="M1355 1629 l-27 -42 21 -20 c11 -12 24 -17 28 -13 4 4 1 13 -8 20
               -15 10 -15 14 -2 31 26 35 33 54 24 59 -5 3 -21 -13 -36 -35z" />
                        <path
                            d="M1445 1556 c-17 -17 -23 -31 -18 -43 15 -41 65 -45 89 -8 15 23 15
               27 0 50 -21 31 -40 32 -71 1z m60 -6 c10 -16 -14 -50 -35 -50 -28 0 -34 19
               -14 41 19 21 39 25 49 9z" />
                        <path
                            d="M841 1555 c-205 -57 -364 -220 -417 -425 -22 -88 -15 -242 15 -330
               115 -334 495 -485 821 -327 88 43 204 159 247 247 134 276 50 597 -199 758
               -97 63 -173 85 -303 89 -76 2 -127 -2 -164 -12z m302 -42 c131 -38 262 -143
               324 -259 117 -220 80 -476 -93 -648 -105 -106 -235 -160 -384 -160 -149 0
               -279 54 -384 160 -214 213 -214 555 0 768 84 85 197 141 319 160 47 7 161 -4
               218 -21z" />
                        <path
                            d="M1043 1243 c-8 -3 -11 -18 -7 -46 8 -61 -20 -101 -81 -116 -45 -11
               -76 -34 -102 -77 -24 -37 -2 88 23 135 13 24 24 45 24 47 0 2 -15 4 -32 4 -95
               0 -178 -58 -178 -124 0 -23 6 -39 15 -42 25 -10 35 4 24 33 -13 34 10 69 56
               89 47 19 48 18 28 -18 -15 -28 -18 -54 -15 -157 1 -69 4 -127 7 -129 2 -2 18
               12 35 32 18 20 38 36 46 36 8 0 14 6 14 13 0 7 23 35 51 62 57 56 55 61 24
               -63 -15 -58 -57 -131 -78 -133 -6 -1 -25 -2 -42 -3 -23 -1 -30 -6 -30 -21 0
               -14 8 -21 27 -23 62 -7 122 57 149 160 16 60 29 52 30 -20 0 -31 4 -77 7 -101
               l7 -44 27 49 c45 83 118 190 118 174 0 -8 -11 -57 -25 -108 -14 -51 -25 -94
               -25 -95 0 -1 27 -3 59 -4 44 -2 61 1 65 12 4 12 -3 15 -30 15 -29 0 -34 3 -30
               18 3 9 16 62 30 117 14 55 32 121 40 148 8 26 10 47 6 47 -15 0 -101 -94 -148
               -163 l-47 -69 -7 38 c-4 22 -7 69 -7 106 -1 41 -5 68 -13 70 -8 3 -6 11 4 29
               23 35 31 85 18 108 -11 21 -16 23 -37 14z m-83 -196 c0 -2 -18 -21 -40 -42
               -26 -26 -40 -34 -40 -23 0 19 48 68 66 68 8 0 14 -1 14 -3z" />
                        <path
                            d="M417 1532 c-4 -5 9 -24 28 -42 34 -33 35 -33 55 -15 11 10 20 23 20
               29 0 6 -8 3 -17 -7 -16 -16 -19 -15 -49 14 -17 17 -34 27 -37 21z" />
                        <path
                            d="M1547 1445 c-20 -14 -37 -31 -37 -37 0 -6 12 -3 26 7 26 17 27 17 22
               -1 -3 -11 -9 -27 -13 -36 -10 -25 8 -23 50 5 46 30 49 51 3 26 -20 -11 -21 -5
               -1 49 8 19 -9 14 -50 -13z" />
                        <path
                            d="M344 1424 c8 -21 49 -73 58 -73 4 -1 6 11 5 27 -2 23 2 27 21 24 40
               -6 23 15 -22 27 -60 15 -69 14 -62 -5z m46 -14 c0 -5 -2 -10 -4 -10 -3 0 -8 5
               -11 10 -3 6 -1 10 4 10 6 0 11 -4 11 -10z" />
                        <path
                            d="M290 1341 c0 -5 12 -19 26 -30 l27 -21 -37 0 c-20 0 -36 -4 -36 -10
               0 -10 92 -14 102 -4 6 6 -64 74 -76 74 -3 0 -6 -4 -6 -9z" />
                        <path
                            d="M1625 1322 c-22 -8 -42 -17 -44 -18 -7 -6 10 -54 20 -54 6 0 8 9 4
               19 -7 23 13 39 21 17 9 -23 26 -19 19 4 -8 25 10 27 24 3 15 -28 24 -8 9 20
               -13 25 -14 25 -53 9z" />
                        <path
                            d="M247 1019 c-39 -22 -4 -79 35 -58 10 5 18 18 18 29 0 25 -30 41 -53
               29z" />
                        <path
                            d="M1712 1018 c-21 -21 -8 -68 19 -68 10 0 39 30 39 40 0 10 -29 40 -39
               40 -4 0 -12 -5 -19 -12z" />
                        <path
                            d="M353 693 c7 -30 -11 -40 -29 -17 -15 18 -15 18 -11 -3 6 -27 -10 -42
               -19 -19 -6 17 -24 22 -24 8 0 -5 6 -16 13 -26 12 -17 15 -17 55 -1 45 19 51
               31 26 61 -15 19 -15 18 -11 -3z" />
                        <path
                            d="M1586 682 c-7 -11 68 -84 77 -75 4 3 -5 20 -20 36 l-28 29 38 -7 c22
               -4 37 -3 37 3 0 17 -94 30 -104 14z" />
                        <path
                            d="M1547 603 c-4 -3 -2 -12 4 -19 14 -17 3 -34 -24 -34 -31 0 -9 -16 41
               -28 24 -5 44 -6 48 -1 3 5 -9 27 -27 49 -36 45 -33 42 -42 33z" />
                        <path
                            d="M367 575 c-20 -14 -37 -31 -37 -37 0 -6 12 -3 27 7 25 17 26 17 18
               -1 -24 -61 -16 -68 40 -31 47 30 49 51 3 26 -18 -10 -20 -9 -16 7 3 11 9 27
               13 37 10 24 -4 21 -48 -8z" />
                        <path
                            d="M1450 475 c-19 -20 -20 -25 -7 -25 9 0 19 5 23 11 4 7 17 0 35 -17
               42 -40 49 -20 8 22 l-35 35 -24 -26z" />
                        <path
                            d="M450 460 c-23 -23 -24 -33 -10 -61 22 -39 90 -13 90 35 0 46 -45 61
               -80 26z m55 -31 c0 -19 -5 -24 -24 -24 -30 0 -37 17 -15 39 22 22 39 15 39
               -15z" />
                        <path
                            d="M575 401 c-3 -6 2 -14 11 -19 18 -10 15 -22 -11 -59 -9 -12 -12 -24
               -7 -27 8 -5 62 63 62 78 0 10 -50 35 -55 27z" />
                        <path
                            d="M1327 374 c-3 -4 -2 -15 4 -25 12 -23 2 -24 -23 -2 -17 15 -18 14
               -18 -18 -1 -34 -1 -34 -14 -10 -8 15 -16 20 -20 13 -8 -14 35 -82 52 -82 9 0
               11 10 6 38 l-7 37 25 -22 c24 -23 48 -30 48 -15 -2 18 -46 92 -53 86z" />
                        <path
                            d="M670 340 c0 -5 8 -13 17 -19 17 -9 17 -11 1 -45 -10 -19 -14 -37 -9
               -40 4 -3 17 16 30 41 12 25 21 46 19 47 -22 14 -58 23 -58 16z" />
                        <path
                            d="M1183 290 c-6 -22 -29 -27 -35 -8 -2 6 -10 9 -16 7 -14 -5 42 -89 59
               -89 5 0 9 25 9 55 0 56 -8 71 -17 35z" />
                        <path
                            d="M780 250 c0 -63 19 -66 56 -9 25 41 25 71 -1 35 -15 -19 -35 -14 -35
               10 0 8 -4 14 -10 14 -5 0 -10 -22 -10 -50z" />
                        <path
                            d="M920 251 c0 -41 -9 -61 -29 -62 -9 -1 -6 -4 9 -9 36 -12 60 -12 60 0
               0 6 -7 10 -15 10 -12 0 -13 9 -8 45 4 31 2 45 -6 45 -6 0 -11 -13 -11 -29z" />
                        <path
                            d="M1021 266 c-15 -18 -5 -43 21 -49 23 -6 15 -27 -10 -27 -14 0 -15 -2
               -3 -9 18 -12 51 4 51 24 0 8 -12 21 -27 29 -28 15 -28 16 -5 22 12 3 22 10 22
               15 0 14 -36 10 -49 -5z" />
                    </g>
                </svg>

            </a>
        </div>
        <ul
            class="menu top-10 z-40 w-full bg-white left-0 fixed h-0 overflow-hidden transition-all duration-700 ease-[cubic-bezier(0.355, 0.61, 0.215, 1)]
                    md:static md:h-full md:max-w-2xl md:bg-transparent md:top-0 md:z-40 md:left-32
                    md:mt-3 md:flex md:items-center lg:flex lg:justify-center lg:max-w-screen-2xl">
            <li class="pt-24 pb-3 ml-9 md:top-0 md:ml-4 md:mr-4 md:pl-3 md:pr-3 md:pt-0 md:pb-0">
                <a class=" normal-case md:text-black md:uppercase hvr-underline-from-center {{ request()->is('home') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                    href="/home">Home</a>
            </li>
            <li class="pt-5 pb-3 ml-9 md:ml-4 md:mr-4 md:pl-3 md:pr-3 md:pb-0"><a
                    class="normal-case md:text-black md:uppercase hvr-underline-from-center {{ request()->is('prodotti') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                    href="/prodotti">Prodotti</a></li>
            <li class="  pt-5 pb-3 ml-9 md:ml-4 md:mr-4 md:pl-3 md:pr-3 md:pb-0"><a
                    class="normal-case md:text-black md:uppercase hvr-underline-from-center {{ request()->is('collaborazioni') ? 'actived hvr-underline-from-center-attiva' : '' }}"
                    href="">Collaborazioni</a></li>
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
        <div class="hamburger relative h-12 w-12 top-10 left-48 z-50 mr-3 md:hidden lg:hidden ">
            <span
                class="h-px h w-7 mt-2 relative block bg-black transition-all duration-200 ease-[cubic-bezier(0.355, 0.61, 0.215, 1)]"></span>
            <span
                class="h-px w-7 mt-2 relative block bg-black transition-all duration-200 ease-[cubic-bezier(0.355, 0.61, 0.215, 1)]"></span>
            <span
                class="h-px w-7 mt-2 relative block bg-black transition-all duration-100 ease-[cubic-bezier(0.355, 0.61, 0.215, 1)]"></span>
        </div>

    </div>
</header>

<video autoplay muted loop id="" class="w-full h-screen absolute top-0 left-0 object-cover z-0 bg-slate-800">
    <source src="/img/coverVideoAE.mp4" type="video/mp4">
</video>

<div class="section watch relative top-64 z-40 w-full flex">
    <h1
        class=" title text-white big-text italic w-2/4 mx-auto justify-center text-center md:w-full md:h-1/6  flex md:justify-center md:items-center">
        “Credo che avere la terra e non rovinarla <br>
        sia la più bella forma d'arte <br>
        che si possa desiderare” <br>
    </h1>
</div>
<div class="section watch top-72 relative md:top-64 z-40 w-full">
    <h2
        class="title text-white small-text italic w-2/4 mx-auto justify-center text-center md:w-full md:h-1/6  flex md:justify-center md:items-center"">
        - Andy Warhol -

    </h2>
</div>
