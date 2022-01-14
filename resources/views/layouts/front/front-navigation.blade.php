<nav class="navigation">

    <div class="container">
        <div class="relative flex justify-between items-center">
            <div class="left-site flex items-center space-x-10">
                <a href="{{ route('accueil') }}">
                    <img src="{{ asset('storage/img/logos/logo-mtom.png') }}" alt="" style="width: 80px">
                </a>
                <ul class="main-nav hidden lg:flex space-x-6 font-title font-bold uppercase md:text-sm xl:text-xl">
                    <li class="nav-links flex items-center space-x-1 cursor-pointer"
                        @click="megaMenu = !megaMenu">
                        <span class="">Services</span>
                        <svg x-show="!megaMenu" xmlns="http://www.w3.org/2000/svg" class="h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <svg x-show="megaMenu" xmlns="http://www.w3.org/2000/svg" class="h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </li>
                    <li class="nav-links">
                        <a href="{{ route('projets') }}" class="{{ Route::is('projets') ? 'active': '' }}">
                            Projets</a>
                    </li>
                    <li class="nav-links">
                        <a href="{{ route('blogue') }}"  class="{{ Route::is('blogue') ? 'active': '' }}">
                            Blogue</a>
                    </li>
                    <li class="nav-links">
                        <a href="{{ route('apropos') }}"  class="{{ Route::is('apropos') ? 'active': '' }}">
                            À Propos</a>
                    </li>
                    <li class="nav-links">
                        <a href="{{ route('contact') }}"  class="{{ Route::is('contact') ? 'active': '' }}">
                            Contact</a>
                    </li>
                </ul>
            </div>
            <div class="right-side flex items-center space-x-6">
                <a href="{{ route('presenter-projet') }}" class="hidden md:block project-button px-8 py-2 font-bold font-title uppercase bg-mtom-orange text-white transition duration-300 md:text-base xl:text-lg rounded-full hover:scale-[1.03]">
                    Présentez nous votre projet
                </a>

                <span class="button-mobile-menu lg:hidden text-mtom-blue cursor-pointer"
                      @click="mobileMenu = !mobileMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </span>
            </div>

            <!-- MEGAMENU -->
            <div x-show="megaMenu"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-50 transform scale-90"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 transform scale-100"
                 x-transition:leave-end="opacity-50 transform scale-90"
                 x-cloak
                 @click.away="megaMenu = false"
                 x-on:mouseleave="timeout = setTimeout(() => { megaMenu = false }, 300)"
                 class="megamenu hidden lg:flex absolute space-x-8 justify-between bg-white left-0 right-0 p-8 border-2 border-gray-200 shadow rounded-xl transition"
                 style="top: 80px">
                <div class="w-1/3 flex-col space-y-8">
                    <div>
                        <a href="{{ route('site-web') }}">
                            <h4 class="font-title font-bold text-md uppercase">
                                Création de site web
                            </h4>
                        </a>
                        <ul class="sub-navigation mt-2 flex-col">
                            <li class="">
                                <a href="{{ route('site-vitrine') }}" class="flex items-center space-x-1 {{ Route::is('site-vitrine') ? 'active': '' }}">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 inline-flex" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>--}}
{{--                                    </svg>--}}
                                    <span class="inline-flex">Création de site web vitrine</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site-marchand') }}" class="{{ Route::is('site-marchand') ? 'active': '' }}">
                                    Création de site web marchand
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site-one-page') }}" class="{{ Route::is('site-one-page') ? 'active': '' }}">
                                    Création de site web "One Page"
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-title font-bold text-md uppercase">
                            Formations en ligne
                        </h4>
                        <ul class="sub-navigation mt-2 flex-col">
                            <li>
                                <a href="{{ route('formations') }}" class="{{ Route::is('formations') ? 'active': '' }}">
                                    Découvrez nos formations en ligne
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-1/3">
                    <a href="{{ route('marketing-digital') }}">
                        <h4 class="font-title font-bold text-md uppercase">
                            Marketing digital
                        </h4>
                    </a>
                    <ul class="sub-navigation mt-2 flex-col">
                        <li>
                            <a href="{{ route('reseaux-sociaux') }}" class="{{ Route::is('reseaux-sociaux') ? 'active': '' }}">
                                Gestion des réseaux sociaux
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('publicite-ciblee') }}" class="{{ Route::is('publicite-ciblee') ? 'active': '' }}">
                                Publicité ciblée
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('referencement-payant') }}" class="{{ Route::is('referencement-payant') ? 'active': '' }}">
                                Référencement payant
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('audit') }}" class="{{ Route::is('audit') ? 'active': '' }}">
                                Audit et recommandations
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('optimisation-seo') }}" class="{{ Route::is('optimisation-seo') ? 'active': '' }}">
                                Optimisation SEO
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('maintenance') }}" class="{{ Route::is('maintenance') ? 'active': '' }}">
                                Maintenance de site web
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-1/3">
                    <a href="{{ route('contact') }}">
                        <h4 class="font-title font-bold text-md uppercase">
                            Des questions
                        </h4>
                    </a>
                    <p class="mt-2" style="font-size: 16px; ">
                        Vous voulez nous présenter un projet, avoir plus d'informations sur nos services ou tout autre demande ?
                        <br>
                        N'hésitez plus,
                        <a href="{{ route('contact') }}" class="inline font-black underline decoration decoration-2 underline-offset-2">Contactez-nous !</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>

