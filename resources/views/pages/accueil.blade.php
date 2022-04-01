<x-layouts.front-layout>

@section('title')Création de site web et stratégie digitale | MtoM Création
@endsection

@section('meta-description')Création de site web professionnel sur-mesure. Spécialisé dans les sites web vitrines et boutiques en ligne. Experts en conception de sites web et stratégies numériques.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/building-websites.png') }}
@endsection

    <!-- Hero page accueil -->
    <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero">

        <div class="lg:w-8/12 lg:mr-4">
            <h1 class="title-1 text-mtom-blue">
                Création de <span class="text-mtom-orange">site web</span> et
                <br>stratégie digitale
            </h1>
            <p class="mt-6 font-black text-2xl">
                Entreprises, travailleurs autonomes, artisans, commerçants, OBNL…
            </p>
            <p class="mt-2 mb-6">
                Vous souhaitez créer un <a href="{{ route('site-web') }}" class="font-bold">site internet professionnel</a> pour avoir une vitrine sur le web, pour présenter votre activité, <a href="{{ route('site-marchand') }}" class="">vendre vos produits en ligne</a>, faire de la publicité ciblée ou encore
                <a href="{{ route('reseaux-sociaux') }}">vous faire connaître grâce aux réseaux sociaux</a> ? Vous êtes à la bonne place ! Nous avons une offre adaptée à tous vos besoins ! Notre promesse, <b>concevoir des projets sur-mesure</b> pour tous nos clients en alliant expertise, qualité et image de marque.
                <br>
            </p>

            <x-bouton-icon :lien="route('presenter-projet')">Nous sommes là pour vous accompagner</x-bouton-icon>
        </div>

        <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
{{--            <x-test-animate-icon></x-test-animate-icon>--}}
            <img src="{{ asset('storage/img/visuels/building-websites.svg') }}"
                 class=" w-80 lg:w-full mx-auto lg:mx-0"
                 alt="visuel-site-web-page-accueil-{{ config('app.tagline-slug') }}">
        </div>

    </div>


{{--    <div class="h-screen">--}}
{{--        <div class="text-red-300">--}}
{{--            <x-pictos.user/>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Section expertise -->
    <div class="presentation-services image-fond-texture min-h-screen py-20 flex items-center shadow-xl">
        <div class="container">

            <div class="text-center">
                <h2 class="title-1 text-white">
                    Notre <span class="text-mtom-orange">expertise</span>
                </h2>
                <p class="my-10 text-white max-w-[1100px] mx-auto">
                    Chez MtoM Création, nous accompagnons et éduquons nos clients à tirer pleinement avantage du web pour accroître leur notoriété, augmenter leurs ventes et conquérir de nouveaux marchés.
                    <br>
                    <b>On vous aide à donner vie à vos projets !</b>
                </p>
            </div>

            <div class="lg:flex lg:space-x-8 space-y-8 lg:space-y-0 mt-20">

                <a href="{{ route('site-web') }}"
                   class="block lg:w-1/3 py-10 text-center bg-mtom-blue/50 border-4 transform hover:-translate-y-2 hover:scale-[1.02] transition duration-500 border-mtom-gray hover:bg-mtom-blue-2 hover:border-white transition rounded-xl mt-4 md:mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-full text-mtom-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-2xl font-title font-black text-white uppercase mt-4">
                        Création de
                        <br class="hidden md:inline">
                        site web
                    </h3>
                </a>

                <a href="{{ route('publicite-ciblee') }}"
                   class="block lg:w-1/3 py-10 text-center bg-mtom-blue/50 border-4 transform hover:-translate-y-2 hover:scale-[1.02] transition duration-500 border-mtom-gray hover:bg-mtom-blue-2 hover:border-white transition rounded-xl mt-4 md:mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-full text-mtom-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    <h3 class="text-2xl font-title font-black text-white uppercase mt-4">
                        Publicité ciblée
                        <br class="hidden md:inline">
                        en ligne
                    </h3>
                </a>

                <a href="{{ route('reseaux-sociaux') }}"
                   class="block lg:w-1/3 py-10 text-center bg-mtom-blue/50 border-4 transform hover:-translate-y-2 hover:scale-[1.032 transition duration-500 border-mtom-gray hover:bg-mtom-blue-2 hover:border-white transition rounded-xl mt-4 md:mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-full text-mtom-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                    </svg>
                    <h3 class="text-2xl font-title font-black text-white uppercase mt-4">
                        Gestion des
                        <br class="hidden md:inline">
                        réseaux sociaux
                    </h3>
                </a>

            </div>

            <div class="text-center mt-14">
                <x-bouton-icon-2 :lien="route('tous-les-services')">Tous nos services</x-bouton-icon-2>
            </div>

        </div>
    </div>

    <!-- Notre mission -->
    <div class="notre-mission page-section-1 flex items-center shadow-lg">
        <div class="container text-center">

            <div class="text-center">
                <h4 class="sub-title-2 text-gray-50">?</h4>
                <h2 class="title-2 text-mtom-blue">
                    Qui <span class="text-mtom-orange">nous sommes</span>
                </h2>
            </div>

            <p class="text-center my-10 max-w-[1100px] mx-auto text-2xl">
                MtoM Création est une entreprise spécialisée dans la conception de <b>sites web et l’élaboration de stratégies numériques</b>. Basée à Montréal, nous aidons les PME, les startups, les OBNL et toutes les entreprises qui souhaitent améliorer leur présence en ligne, en proposant des solutions adaptées à chacun.<a href="{{ route('site-web') }}"> Création et refonte de site web</a>, <a href="{{ route('site-marchand') }}">site e-commerce</a>,
                <a href="{{ route('optimisation-seo') }}">optimisation du référencement naturel SEO</a>, <a href="{{ route('referencement-payant') }}">campagnes Google Ads</a> et <a href="{{ route('publicite-ciblee') }}">Facebook Ads</a>…
                <br>
                <br>
                <b>Nous sommes convaincus que notre vraie valeur ajoutée est autant dans l'accompagnement, le conseil et la confiance que vous nous accordez que dans les solutions techniques
                    <br>que nous vous proposons.</b>
{{--                <br>--}}
{{--                <br>--}}
{{--                <b>Payez uniquement pour ce dont vous avez besoin, telle est notre devise.</b>--}}
            </p>

            <x-bouton-icon :lien="route('apropos')">En savoir plus</x-bouton-icon>

        </div>
    </div>


    <!-- Création de site vitrine -->
    <div class="page-section-1 shadow-lg">

        <div class="container lg:flex items-center lg:space-x-14">
            <div class="lg:w-4/12 lg:ml-6">
                <img src="{{ asset('storage/img/visuels/site-vitrine-image.svg') }}"
                     alt="image-site-web-page-one-page-{{ config('app.tagline-slug') }}"
                     class="w-52 mx-auto mb-10 lg:mb-0 lg:w-full">
            </div>

            <div class="lg:w-8/12">
                <div class="">
                    <h4 class="sub-title-2 text-gray-50">À l'essentiel</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Création de <span class="text-mtom-orange">site web</span> vitrine
                    </h2>
                </div>

                <div class="mt-5">
                    <x-avantages-site-web></x-avantages-site-web>
                </div>

                <p class="mt-5">
                    Véritable outil de communication, votre site web véhicule l’image de votre entreprise auprès de vos clients, vos fournisseurs et vos partenaires. Indispensable dans le développement de votre activité, <a href="{{ route('site-web') }}" class="font-bold">nous vous créons site web professionnel sur mesure</a> qui vous appartient et répond à tous vos besoins.
                </p>

                <x-bouton-icon :lien="route('site-vitrine')" class="mt-5">Création de site web</x-bouton-icon>
            </div>
        </div>

        <div class="container mt-20">

        </div>

    </div>

    <!-- Derniers sites web -->
    <div class="page-section-2 image-fond-texture">
        <div class="container">
            <div class="flex justify-between items-end">
                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Réalisations</h4>
                    <h2 class="title-2 text-white">
                        Nos derniers <span class="text-mtom-orange">sites web</span>
                    </h2>
                </div>
                <div class="hidden lg:inline-flex">
                    <x-bouton-icon-2 :lien="route('projets')" class="">Autres projets</x-bouton-icon-2>
                </div>
            </div>

            <div class="md:flex md:space-x-10 space-y-10 md:space-y-0 mt-10">
                @foreach($derniers_sites as $projet)
                    <x-projet-box2 :projet="$projet"></x-projet-box2>
                @endforeach
            </div>

        </div>
    </div>

    <!-- Formations en ligne -->
    <div class="page-section-1 flex items-center shadow-lg">

        <div class="container lg:flex items-center lg:space-x-14">
            <div class="lg:w-8/12">
                <div class="">
                    <h4 class="sub-title-2 text-gray-50">Se former</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Des <span class="text-mtom-orange">formations</span> en ligne avec MtoM Création
                    </h2>
                </div>
                <p class="my-10">
                    Nous proposons des formations pour <b>vous accompagner dans le développement de vos compétences</b>. Que ce soit pour la gestion des réseaux sociaux, pour en savoir plus sur la création d'un site internet, l'élaboration d'une stratégie de web ou la mise en place de campagnes de communication efficace, nous saurons répondre à toutes vos questions.
                </p>
                <x-bouton-icon :lien="route('formations')">Voir nos formations</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 hidden lg:block">
                <img src="{{ asset('storage/img/visuels/formations-image.svg') }}"
                     alt="image-formations-{{ config('app.tagline-slug') }}">
            </div>
        </div>

    </div>

    <!-- Derniers articles -->
    <div class="page-section-2 image-fond-texture">
        <div class="container">
            <div class="flex justify-between items-end">
                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">On en parle</h4>
                    <h2 class="title-2 text-white">
                        Nos derniers <span class="text-mtom-orange">articles</span>
                    </h2>
                </div>
                <div class="hidden lg:inline-flex">
                    <x-bouton-icon-2 :lien="route('articles')" class="">Tous nos articles</x-bouton-icon-2>
                </div>
            </div>

            <div class="md:flex md:space-x-10 space-y-10 md:space-y-0 mt-10">
                @foreach($articles as $article)
                    <a href="{{ route('article.show', $article) }}"
                       class="article-box flex flex-col justify-between md:transform hover:-translate-y-2 transition duration-500 ease-in-out">
                        <div class="article-box-content text-white">
                            <img src="{{ asset($article->image) }}" class="rounded" alt="image-article-{{ Str::slug($article->titre) }}-{{ config('app.tagline-slug') }}">
                            <h3 class="font-bold font-title text-xl mt-4">{{ $article->titre }}</h3>
                            <p class="mt-2 text-base">{{ Str::limit($article->description, 100) }}</p>
                        </div>
{{--                        <div class="flex items-center justify-between border-t border-gray-100 pt-3 mt-3">--}}
{{--                            <p class="text-xs font-black">Publié le {{ $article->date_publication }}</p>--}}
{{--                            <p class="lire-article text-xs font-title font-bold uppercase">Lire l'article</p>--}}
{{--                        </div>--}}
                    </a>
                @endforeach
            </div>

        </div>
    </div>


    <!-- Ils Nous ont fait confiance -->
    <div class="page-section-1 flex items-center shadow-lg">
        <div class="container relative">

            <div class="text-center">
                <div class="text-center mb-10">
                    <h4 class="sub-title-2 text-gray-50" >Portfolio</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Ils nous ont fait <span class="text-mtom-orange">confiance</span>
                    </h2>
                </div>

                <div class="mb-5">
                    <div class="hidden lg:block">
                        @foreach($projetsLG as $projet)
                            <a href="{{ route('projet.show', $projet) }}">
                                <img src="{{ asset($projet->logo) }}"
                                     alt="logo-{{ \Illuminate\Support\Str::slug($projet->client) }}-{{ config('app.tagline-slug') }}"
                                     class="w-14 inline m-4 transform filter saturate-0 hover:saturate-100 hover:scale-125 hover:-rotate-6 transition transition duration-300 ">
                            </a>
                        @endforeach
                    </div>
                    <div class="lg:hidden">
                        <div class="relative rounded-xl overflow-auto">
                            <div class="relative w-full flex gap-6 snap-x snap-mandatory overflow-x-auto pb-14">
                                @foreach($projetsLG as $projet)
                                    <a href="{{ route('projet.show', $projet) }}" class="snap-always snap-center shrink-0 first:pl-8 last:pr-8">
                                        <img src="{{ asset($projet->logo) }}"
                                             class="w-[120px] hover:scale-[1.02] transition transition duration-300 ease-in-out"
                                             alt="image projet-{{ Str::slug($projet->client) }}-{{ config('app.tagline') }}">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <x-bouton-icon :lien="route('projets')">Voir les projets</x-bouton-icon>
            </div>

        </div>
    </div>

    <div class="">
        <div class="bg-[#021223] px-14 py-20">
            <div class="flex text-white container">
                <div class="w-full md:w-3/4 flex flex-col justify-center">
                    <h4 class="font-title text-5xl mb-2">Envie de <span class="text-mtom-orange">booster</span> votre <br><span class="underline">projet web</span> ?</h4>
                    <p class="text-white my-4">
                        <a href="{{ route('site-vitrine') }}">Création de site web sur mesure</a>, <a
                            href="{{ route('site-marchand') }}">e-commerce</a>, <a
                            href="{{ route('marketing-digital') }}">stratégie marketing</a>, <a
                            href="{{ route('publicite-ciblee') }}">publicité ciblée</a>...
                        <br>
                        Nous sommes là pour vous accompagner dans votre projet digital.
                    </p>
                    <div>
                        <x-bouton-icon :lien="route('contact')">Contactez-nous</x-bouton-icon>
                    </div>
                </div>
                <div class="hidden md:inline-flex w-1/4">
                    <img src="{{ asset('storage/img/visuels/to-the-stars-2.gif') }}" class="rounded" alt="image projet-gorczany-llc-MtoM Création - Création de site web et stratégies numerique à Montréal">
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT SECTION -->
    <div class="page-section-1 container md:space-x-14 py-20">
        <x-contact-section-1></x-contact-section-1>
    </div>


    <!------------------ CSS ------------------>
    <x-slot name="custom_css">
        <style>

        </style>
    </x-slot>

</x-layouts.front-layout>


