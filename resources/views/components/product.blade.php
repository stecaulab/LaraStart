<div class="product m-top3 m-bott2">
    @section('title', 'Prodotti')

    <!-- zafferano ---------------------------------------------------------------------------------------------------------------------  -->

    <div class="mb-8">
        <div
            class="max-w-2xl mx-auto px-4 grid grid-cols-1  gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
            <div>
                <h2 class="text-3xl font-extrabold uppercase tracking-tight  second-text-color sm:text-4xl reveal2">
                    Zafferano di Montagna</h2>
                <p class="mt-4 text-[25px] leading-10 font-light  text-gray-500 reveal2">
                    Coltivato secondo il metodo Bio Sinergico Consapevole, lungo le sponde del torrente Mastallone nasce
                    lo Zafferano di Montagna. <br>
                    Cresce forte e rigoglioso a 665msl circondato da verdi montagne e respira l'aria pura e frizzante
                    tipica di queste zone. <br>
                    Grazie ad un sistema innovativo di agricoltura etica e sostenibile a bassissimo impatto ambientale,
                    beneficia di qualità organolettiche superiori che valorizzano i piatti esaltandone sapore, colore e
                    profumo. <br>
                    Bastano infatti pochi stimmi per per creare una vera e propria opera d'arte culinaria che lascerà
                    memoria
                    di un'esperienza sensoriale unica.
                    Lavorare in sinergia con la natura è il nostro modo di rendere omaggio alla terra. <br>
                    crediamo in un mondo più sano,in un'agricoltura che arricchisce il terreno e che permette al nostro
                    zafferanodi avere molecole molto sviluppate.
                </p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8 reveal2">
                    <div class="border-t border-gray-400 pt-4">
                        <dt class="font-medium text-gray-900">Origine</dt>
                        <dd class="mt-2 text-sm text-gray-500">Azienda Agricola Val Mastallone Nosuggio (VC)</dd>
                    </div>
                    <div class="border-t border-gray-400 pt-4 reveal2">
                        <dt class="font-medium text-gray-900">Prezzi</dt>
                        <dd class="mt-2 text-sm text-gray-500">
                            <span class="w-12 border border-transparent">Zafferano 0.10g</span> <span
                                class="w-12 border border-transparent">€ &nbsp; 9.00 </span> <br>
                            <span class="w-12 border border-transparent">Zafferano 0.15g</span> <span
                                class="w-12 border border-transparent">€ 13.00 </span> <br>
                            <span class="w-12 border border-transparent">Zafferano 0.25g</span> <span
                                class="w-12 border border-transparent">€ 20.00</span><br>
                            <span class="w-12 border border-transparent">Zafferano &nbsp; 0.5g</span> <span
                                class="w-12 border border-transparent">€ 35.00</span><br>
                            <span class="w-12 border border-transparent">Zafferano &nbsp;&nbsp;&nbsp; 1g</span> <span
                                class="w-12 border border-transparent">€ 65.00</span><br>
                        </dd>
                    </div>
                    <div class="border-t border-gray-400 pt-4">
                        <dt class="font-medium text-gray-900">Confezione</dt>
                        <dd class="mt-2 text-sm text-gray-500">Scatola regalo con nastro e paglietta &nbsp; 1€</dd>
                    </div>
                </dl>
            </div>
            <div class="grid grid-cols-1 grid-rows-2  mt-4 mb-4 gap-2 sm:gap-6 lg:gap-y-2">
                {{-- <img src="/img/zafferano1.jpg" alt="zafferano di montagna" class="bg-gray-300 rounded-lg mt-8 mx-auto h-64 zoom "> --}}
                <img src="/img/zafferano.jpg" loading="lazy" alt="zafferano-di-montagna"
                    class="bg-gray-100 rounded-lg mt-20 mx-auto   zoom">
                <img src="/img/tris-pack-zoom.jpg" loading="lazy" alt="zafferano-di-montagna"
                    class="bg-gray-100 rounded-lg  mx-auto   zoom">
                {{-- <img src="/img/single-pack.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="bg-gray-100 rounded-lg mt-8 zoom"> --}}
                {{-- <img src="/img/tris-pack-zoom.jpg" alt="Side of walnut card tray with card groove and recessed card area." class="bg-gray-100 rounded-lg mt-8 zoom"> --}}
                {{-- <img src="/img/single-pack.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="bg-gray-100 rounded-lg mt-8 zoom"> --}}
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-16 gap-x-8 max-w-2xl mx-auto py-10 px-4 items-center lg:max-w-7xl lg:px-8 lg:grid-cols-4 border-t border-b border-gray-400">
            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i class="mt-5 far fa-edit fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Scegli il prodotto o la
                                confezione che preferisci tra quelle in elenco.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i
                                    class=" mt-5 fas fa-envelope-open-text fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Invia un email all'indirizzo:
                                <a class="text-yellow-700 font-extralight md:text-gray-900 md:hover:text-yellow-700 md:hover:font-semibold"
                                    href="mailto:aziendaagricolavalmastallone@gmail.com">AziendaAgricolaValMastallone@gmail.com</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i class=" mt-5 fab fa-whatsapp fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Oppure inviaci un messaggio
                                Whatsapp:
                                <a class="text-yellow-700 font-extralight md:text-gray-900 md:hover:text-yellow-700 md:hover:font-semibold"
                                    href"https://api.whats=app.com/send?phone=+393286949075">+393286949075</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i class="mt-5 fas fa-truck fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Consegne garantite in 5-7
                                giorni lavorativi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- zafferano e miele ----------------------------------------------------------------------------------------------------------------  -->

        <div
            class="max-w-2xl mx-auto px-4 grid grid-cols-1  gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
            <div>
                <h2
                    class="text-3xl mt-10 font-extrabold uppercase tracking-tight  second-text-color sm:text-4xl reveal2">
                    Miele & Zafferano</h2>
                <p class="mt-4 text-lg leading-loose text-gray-500 reveal2">
                    Tra le nostre sinergie spicca l'incontro tra Miele e Zafferano di montagna, in cui gli ingredienti
                    fondono leloro proprietà
                    organolettiche per donare un prodotto dal colore, profumo e sapore intensi. <br>
                    Uno scrigno prezioso dalla mille riisorse, che vi permetterà di viaggiare con la fantasia creando
                    incucina infinite combinazioni, dai formaggi, <br>
                    allo yogurt, al gelato o semplicemente col pane appena sfornato. <br>
                    Vogliamo regalarVi il gusto di un prodotto che rispetta l'ambiente e tutti i suoi abitanti.
                </p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8 reveal2">
                    <div class="border-t border-gray-400 pt-4">
                        <dt class="font-medium text-gray-900">Origine</dt>
                        <dd class="mt-2 text-sm text-gray-500">Azienda Agricola Val Mastallone Nosuggio (VC)</dd>
                    </div>
                    <div class="border-t border-gray-400 pt-4 reveal2">
                        <dt class="font-medium text-gray-900">Prezzi</dt>
                        <dd class="mt-2 text-sm text-gray-500">
                            <span class="w-12 border border-transparent">Zafferano 250g</span> <span
                                class="w-12 border border-transparent">€15.00 </span> <br>


                        </dd>
                    </div>
                    <div class="border-t border-gray-400 pt-4">
                        <dt class="font-medium text-gray-900">Confezione</dt>
                        <dd class="mt-2 text-sm text-gray-500">Scatola regalo con nastro e paglietta &nbsp; 1€</dd>
                    </div>
                </dl>
            </div>
            <div class="grid grid-cols-1 grid-rows-2 mt-8 mb-8 gap-4 sm:gap-6 lg:gap-8">
                {{-- <img src="/img/zafferano1.jpg" alt="zafferano di montagna" class="bg-gray-300 rounded-lg mt-8 mx-auto h-64 zoom "> --}}
                <img src="/img/miele.jpg" loading="lazy" alt="miele-e-zafferano-di-montagna"
                    class="bg-gray-100 rounded-lg mt-8 mx-auto h-64 zoom">
                <img src="/img/bis-prod.jpg" loading="lazy" alt="miele-e-zafferano-di-montagna""
                    class="bg-gray-100 rounded-lg mt-8 mx-auto h-64 zoom">
                {{-- <img src="/img/single-pack.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="bg-gray-100 rounded-lg mt-8 zoom"> --}}
                {{-- <img src="/img/tris-pack-zoom.jpg" alt="Side of walnut card tray with card groove and recessed card area." class="bg-gray-100 rounded-lg mt-8 zoom"> --}}
                {{-- <img src="/img/single-pack.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="bg-gray-100 rounded-lg mt-8 zoom"> --}}
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-16 gap-x-8 max-w-2xl mx-auto py-10 px-4 items-center lg:max-w-7xl lg:px-8 lg:grid-cols-4 border-t border-b border-gray-400">
            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i class="mt-5 far fa-edit fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Scegli il prodotto o la
                                confezione che preferisci tra quelle in elenco.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i
                                    class=" mt-5 fas fa-envelope-open-text fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Invia un email all'indirizzo:
                                <a class="text-yellow-700 font-extralight md:text-gray-900 md:hover:text-yellow-700 md:hover:font-semibold"
                                    href="mailto:aziendaagricolavalmastallone@gmail.com">AziendaAgricolaValMastallone@gmail.com</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i
                                    class=" mt-5 fab fa-whatsapp fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Oppure inviaci un messaggio
                                Whatsapp:
                                <a class="text-yellow-700 font-extralight md:text-gray-900 md:hover:text-yellow-700 md:hover:font-semibold"
                                    href="https://api.whatsapp.com/send?phone=+393286949075">+393286949075</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i class="mt-5 fas fa-truck fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Consegne garantite in 5-7
                                giorni lavorativi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aceto di Mele -------------------------------------------------------------------------------------------------------------------- -->

        <div
            class="max-w-2xl mx-auto px-4 grid grid-cols-1  gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
            <div>
                <h2
                    class="text-3xl mt-10 font-extrabold uppercase tracking-tight  second-text-color sm:text-4xl reveal2">
                    Aceto di Mele</h2>
                <p class="mt-4 text-lg leading-loose text-gray-500 reveal2">
                    Direttamente dal nostro frutteto, che curiamo ogni giorno con la massima attenzione,cogliamo mele al
                    100% ValMastallone. <br>
                    Esse si trasformano e concentrano tutte le loro sostanzepreziose in un condimento dal colore ambrato
                    <br>
                    che diventa un vero e proprio alleato per il nostro benessere. <br>
                    Ricco di sali minerali, oligoelementi,vitamine e fibbre offre innumerevoli vantaggi sia per la
                    salute che per la bellezza. <br>
                </p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8 reveal2">
                    <div class="border-t border-gray-400 pt-4">
                        <dt class="font-medium text-gray-900">Origine</dt>
                        <dd class="mt-2 text-sm text-gray-500">Azienda Agricola Val Mastallone Nosuggio (VC)</dd>
                    </div>
                    <div class="border-t border-gray-400 pt-4 reveal2">
                        <dt class="font-medium text-gray-900">Prezzi</dt>
                        <dd class="mt-2 text-sm text-gray-500">
                            <span class="w-12 border border-transparent">Aceto di Mele 250ml</span> <span
                                class="w-12 border border-transparent">€ &nbsp; 5.00 (4 porzioni)</span> <br>

                        </dd>
                    </div>
                    <div class="border-t border-gray-400 pt-4">
                        <dt class="font-medium text-gray-900">Confezione</dt>
                        <dd class="mt-2 text-sm text-gray-500">Scatola regalo con nastro e paglietta &nbsp; 1€</dd>
                    </div>
                </dl>
            </div>
            <div class="grid grid-cols-1 grid-rows-2 mt-8 mb-8 gap-4 sm:gap-6 lg:gap-8">
                {{-- <img src="/img/zafferano1.jpg" alt="zafferano di montagna" class="bg-gray-300 rounded-lg mt-8 mx-auto h-64 zoom "> --}}
                <img src="/img/tris-prod.jpg" loading="lazy" alt="aceto-di-mele"
                    class="bg-gray-100 rounded-lg mt-8 mx-auto h-64 zoom">
                <img src="/img/tris-confezione.jpg" loading="lazy" alt="aceto-di-mele"
                    class="bg-gray-100 rounded-lg mt-8 mx-auto h-64 zoom">
                {{-- <img src="/img/single-pack.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="bg-gray-100 rounded-lg mt-8 zoom"> --}}
                {{-- <img src="/img/tris-pack-zoom.jpg" alt="Side of walnut card tray with card groove and recessed card area." class="bg-gray-100 rounded-lg mt-8 zoom"> --}}
                {{-- <img src="/img/single-pack.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="bg-gray-100 rounded-lg mt-8 zoom"> --}}
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-y-16 gap-x-8 max-w-2xl mx-auto py-10 px-4 items-center lg:max-w-7xl lg:px-8 lg:grid-cols-4 border-t border-b border-gray-400">
            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i class="mt-5 far fa-edit fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Scegli il prodotto o la
                                confezione che preferisci tra quelle in elenco.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i
                                    class=" mt-5 fas fa-envelope-open-text fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Invia un email all'indirizzo:
                                <a class="text-yellow-700 font-extralight md:text-gray-900 md:hover:text-yellow-700 md:hover:font-semibold"
                                    href="mailto:aziendaagricolavalmastallone@gmail.com">AziendaAgricolaValMastallone@gmail.com</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i
                                    class=" mt-5 fab fa-whatsapp fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Oppure inviaci un messaggio
                                Whatsapp:
                                <a class="text-yellow-700 font-extralight md:text-gray-900 md:hover:text-yellow-700 md:hover:font-semibold"
                                    href="https://api.whatsapp.com/send?phone=+393286949075">+393286949075</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:grid-cols-1 lg:gap-x-8">
                    <div class="pt-4">
                        <div class="font-medium text-center ">
                            <span class="text-pink-800 max-auto"><i class="mt-5 fas fa-truck fa-3x zoom"></i></span>
                            <h3 class="text-gray-900 mt-10 text-base font-thin reveal2"> Consegne garantite in 5-7
                                giorni lavorativi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
