<x-layouts.front-layout>

@section('title')Optimisation du SEO | Référencemnt naturel - MtoM Création
@endsection

@section('meta-description')Découvrez comment améliorer votre référencement SEO pour booster votre visibilité et augmenter le trafic sur votre site web. Optimisation SEO de votre site.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/optimisation-seo.png') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero">

            <div class="lg:w-8/12">
                <h1 class="title-1 text-mtom-blue ">
                    Optimisation <span class="text-mtom-orange">SEO</span> <br>
                    Référencement naturel
                </h1>
                <p class="mt-10">
                    Ce qu’on appelle SEO (Search Engine Optimization) correspond à l’ensemble de techniques permettant d’optimiser la visibilité d’une page web dans les résultats de recherche. Concrètement, plus votre site est optimisé, plus il a de chances de ressortir en haut des résultats de recherche lorsque les internautes tapent des requêtes correspondant à votre contenu. Il est donc primordial que cela soit bien fait pour qu’on vous trouve facilement.
                    <br>
                    On dit souvent qu’avoir un site web c’est bien, mais s’il n’est pas visité, il ne sert à rien.
                </p>
                <x-bouton-icon :lien="route('contact')">En savoir plus</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/optimisation-seo.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-optimisation-seo-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- Objectifs -->
        <div class="page-section-1 image-fond-texture flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Pourquoi</h4>
                    <h2 class="title-2 text-white">
                        Pour que Google soit accro à votre  <span class="text-mtom-orange">site web</span> ?
                    </h2>
                </div>

                <div class="text-white mt-6 text-base">
                    <p>
                        Être en tête des moteurs de recherche n’est pas magique. Il faut un peu de patience et de rigueur pour voir les premiers résultats.
                        Les indispensables pour un site web optimisé :
                    </p>
                    <ul class="list-disc ml-6 flex-col space-y-3 mt-4 text-lg">
                        <li class="">
                            <b>Structurer son contenu pour faciliter la lecture de Google : Titre, Hx, balises, texte …</b>
                        </li>
                        <li class="">
                            <b>Rechercher des mots-clés précis pour un meilleur ciblage et un meilleur positionnement</b>
                        </li>
                        <li class="">
                            <b>Créer du contenu de qualité, unique et pertinent</b>
                        </li>
                        <li class="">
                            <b>Insérer un maximum de liens internes mais aussi externes</b>
                        </li>
                        <li class="">
                            <b>Avoir un site sécurisé, rapide et responsive design : mobile, tablette et ordinateur</b>
                        </li>
                        <li class="">
                            <b>Créer des boutons de partage pour signaler à Google votre présence sur les réseaux sociaux</b>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- FAQ -->
        <div class="image-fond-texture page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">FAQ</h4>
                    <h2 class="title-2 text-white">
                        <span class="text-mtom-orange">Questions</span> fréquentes
                    </h2>
                </div>

                <div class="text-white mt-6">
                    <p>
                        Avant de commencer à rédiger du contenu ou à bâtir une stratégie SEO, il est important de comprendre ce qui a déjà été fait, ce qui a fonctionné et les irritants du passé. Ensuite, nous travaillons avec des objectifs clairs et une feuille de route pour suivre l’avancement de chaque action mise en place.
                    </p>
                    <div class="space-y-8 mt-8">

                        <x-icon-box-faq-1 titre="Avez-vous besoin d’accès à mes plateformes ?"
                                          path="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            Pour analyser au mieux et vous proposer une stratégi, nous demandons un accès à plusieurs de vos plateformes comme votre site web, Google Analytics, Google Search Console et tout autre outil que vous utilisez pour votre référencement naturel. Nous pouvons aussi vous installer des outils pour suivre et mesure nos actions.
                        </x-icon-box-faq-1>

                        <x-icon-box-faq-1 titre="J’ai déjà un site web mais je ne sais pas si le SEO est optimal"
                                          path="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            Même si nous n’avons pas crée votre site web, nous avons des outils pour analyser votre site et vous proposer des recommandations. Nous pourrons également les mettre en place sur votre plateforme et faire un suivi.
                        </x-icon-box-faq-1>

                        <x-icon-box-faq-1 titre="Je voudrais écrire des articles de blog mais j’ai besoin d’un accompagnement"
                                          path="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            Nous proposons des accompagnements et des formations pour vous aider dans la rédaction de votre contenu. Nous partagerons nos conseils et bonnes pratiques pour que vous soyez autonome dans la rédaction de vos articles de blog
                        </x-icon-box-faq-1>

                        <x-icon-box-faq-1 titre="Proposez-vous des services de rédaction de contenu ?"
                                          path="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            Oui, nous proposons nos services pour la rédaction de vos articles de blog et autre contenu. Nous sommes capables de rédiger sur de nombreux sujets et thématiques mais nous nous gardons le droit de refuser si votre entreprise ou secteur d’activité est trop spécifique ou pointu.
                        </x-icon-box-faq-1>

                    </div>
                </div>

            </div>
        </div>

        <!-- Autres services -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="text-center">
                    <h4 class="sub-title-2 text-gray-50">Vos besoins</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Nos autres <span class="text-mtom-orange">services</span>
                    </h2>
                </div>
                <p class="text-center mt-3">
                    Une offre adaptée à tous vos besoins ! <br>
                    Retrouvez les autres services que nous proposons pour faire rayonner votre marque.
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-20">
                    <div class="">
                        <x-service-box service="reseaux_sociaux"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="site_vitrine"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="referencement_payant"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="publicite_ciblee"></x-service-box>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <x-call-to-action-1></x-call-to-action-1>

    <!------------------ CSS ------------------>
    <x-slot name="custom_css">

    </x-slot>


</x-layouts.front-layout>


