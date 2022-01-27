<footer class="image-fond-texture pt-20 pb-16" x-show="!mobileMenu">
    <div class="footer-navigation container md:flex md:space-x-8 md:justify-between text-center md:text-left">

        <div class="md:w-2/12 text-center md:text-left">
            <a href="{{ route('accueil') }}" class="block">
                <img src="{{ asset('storage/img/logos/logo-mtom-blanc.png') }}" alt=""
                     class="mx-auto md:mx-0"
                     style="width: 50px">
            </a>
            <h4 class="text-white font-bold text font-title uppercase mt-6">
                Création de <span class="text-mtom-orange">sites web</span> et stratégies numériques
            </h4>
            <div class="social-links mt-4">
                <ul class="flex justify-center md:justify-start space-x-2 text-gray-500 hover:text-mtom-orange">
                    <li class="facebook">
                        <a href="https://www.facebook.com/mtomcreationmontreal" target="_blank" rel="noopener">
                            <svg style="width:30px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
                            </svg>
                        </a>
                    </li>
                    <li class="Linkedin">
                        <a href="https://www.linkedin.com/company/mtom-creation/" target="_blank" rel="noopener">
                            <svg style="width:30px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19 3A2 2 0 0 1 21 5V19A2 2 0 0 1 19 21H5A2 2 0 0 1 3 19V5A2 2 0 0 1 5 3H19M18.5 18.5V13.2A3.26 3.26 0 0 0 15.24 9.94C14.39 9.94 13.4 10.46 12.92 11.24V10.13H10.13V18.5H12.92V13.57C12.92 12.8 13.54 12.17 14.31 12.17A1.4 1.4 0 0 1 15.71 13.57V18.5H18.5M6.88 8.56A1.68 1.68 0 0 0 8.56 6.88C8.56 5.95 7.81 5.19 6.88 5.19A1.69 1.69 0 0 0 5.19 6.88C5.19 7.81 5.95 8.56 6.88 8.56M8.27 18.5V10.13H5.5V18.5H8.27Z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="md:w-2/12 h-full mt-8 md:mt-0">
            <div>
                <h4 class="font-title font-bold text-white text-md uppercase">
                    Pages
                </h4>
                <ul class="sub-navigation mt-2 flex-col">
                    <li>
                        <a href="{{ route('tous-les-services') }}" class="{{ Route::is('tous-les-services') ? 'active': '' }}">
                            Tous nos services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projets') }}" class="{{ Route::is('projets') ? 'active': '' }}">
                            Projets
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('articles') }}" class="{{ Route::is('articles') ? 'active': '' }}">
                            Articles
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('apropos') }}" class="{{ Route::is('apropos') ? 'active': '' }}">
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active': '' }}">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('presenter-projet') }}" class="{{ Route::is('presenter-projet') ? 'active': '' }}">
                            Présenter un projet
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="md:w-3/12 flex-col space-y-8 mt-8 md:mt-0">
            <div>
                <a href="{{ route('site-web') }}">
                    <h4 class="font-title font-bold text-white text-md uppercase">
                        Création de site web
                    </h4>
                </a>
                <ul class="sub-navigation mt-2 flex-col">
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
                        <a href="{{ route('site-one-page') }}" class="{{ Route::is('site-one-page') ? 'active': '' }}">
                            Création de site web "One Page"
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="{{ route('formations') }}">
                    <h4 class="font-title font-bold text-white text-md uppercase">
                        Formations en ligne
                    </h4>
                </a>
                <ul class="sub-navigation mt-2 flex-col">
                    <li>
                        <a href="{{ route('formations') }}" class="{{ Route::is('formations') ? 'active': '' }}">
                            Découvrez nos formations en ligne
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="md:w-3/12 mt-8 md:mt-0">
            <a href="{{ route('marketing-digital') }}">
                <h4 class="font-title font-bold text-white text-md uppercase">
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

    </div>
</footer>
