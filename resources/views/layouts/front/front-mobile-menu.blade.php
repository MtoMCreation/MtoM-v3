<div class="mobile-menu absolute top-0 h-screen w-full bg-gray-50 p-5"
     x-show="mobileMenu">
    <div class="mobile-menu-content flex flex-col space-y-8">

        <div class="flex justify-between items-center">
            <a href="{{ route('accueil') }}">
                <img src="{{ asset('storage/img/logos/logo-mtom.png') }}"
                     class="" style="width: 80px"
                     alt="">
            </a>
            <span @click="mobileMenu = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 text-mtom-blue hover:text-mtom-orange cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                 </svg>
            </span>
        </div>

        <div>
            <div class="flex justify-center">

            </div>
            <div>
                <div class="flex-col justify-between space-y-2">
                    <div class="flex-col space-y-4 font-bold">
                        <ul class="flex justify-center items-center space-x-4">
                            <li class="w-full">
                                <a class="p-2 bg-gray-100 hover:bg-mtom-orange transition block text-center" href="{{ route('projets') }}">Projets</a>
                            </li>
                            <li class="w-full">
                                <a class="p-2 bg-gray-100 hover:bg-mtom-orange transition block text-center"
                                   href="{{ route('articles') }}">Articles</a>
                            </li>
                        </ul>
                        <ul class="flex justify-center items-center space-x-4">
                            <li class="w-full">
                                <a class="p-2 bg-gray-100 hover:bg-mtom-orange transition block text-center"
                                   href="{{ route('apropos') }}">À Propos</a>
                            </li>
                            <li class="w-full">
                                <a class="p-2 bg-gray-100 hover:bg-mtom-orange transition block text-center"
                                   href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center mt-8">
                    <h4 class="font-title font-bold text-md uppercase">
                        Services
                    </h4>
                    <ul class="sub-navigation mt-2 flex-col font-bold text-mtom-blue">
                        <li>
                            <a href="{{ route('site-vitrine') }}" class="{{ Route::is('site-vitrine') ? 'active': '' }}">
                                Création de site web vitrine
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('site-marchand') }}" class="{{ Route::is('site-marchand') ? 'active': '' }}">
                                Création de site web marchand
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('formations') }}" class="{{ Route::is('formations') ? 'active': '' }}">
                                Formations en ligne
                            </a>
                        </li>
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
            </div>
        </div>

        <div class="w-full">
            <a href="{{ route('presenter-projet') }}" class="block rounded py-3 bg-mtom-orange text-mtom-blue font-bold text-center">
                Présentez votre projet
            </a>
        </div>

    </div>
</div>
