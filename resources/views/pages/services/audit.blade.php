<x-layouts.front-layout>

@section('title')Audit et recommendations - MtoM Création
@endsection

@section('meta-description')Découvrez comment améliorer votre référencement SEO pour booster votre visibilité et augmenter le trafic sur votre site web. Optimisation SEO de votre site.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/audit.png') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero">

            <div class="lg:w-8/12">
                <h1 class="title-1 text-mtom-blue ">
                    Audit et <br> <span class="text-mtom-orange">Recommandations</span>
                </h1>
                <p class="mt-10">
                    Un audit web consiste à faire un état complet de votre site web, une analyse des performances. L’audit web permet de dresser le bilan des forces et des faiblesses du site web afin de déterminer les actions à mener pour y remédier. L’audit web fait partie intégrante de la stratégie numérique et permettra une meilleure expérience digitale.
                </p>
                <x-bouton-icon :lien="route('contact')">En savoir plus</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/audit.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-audit-recommandation-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- Objectifs -->
        <div class="page-section-1 image-fond-texture flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Pourquoi</h4>
                    <h2 class="title-2 text-white">
                        Pourquoi faire un audit de votre <span class="text-mtom-orange">site web</span> ?
                    </h2>
                </div>

                <div class="text-white mt-6 text-base">
                    <ul class="list-disc ml-6 flex-col space-y-4 mt-4 text-lg">
                        <li class="">
                            <b>Comprendre et optimiser</b> : Grâce à un audit web, vous serez en mesure d’ajuster vos actions et d’évitez de dépenser du temps et de l’argent pour des actions sans retour.
                        </li>
                        <li class="">
                            <b>Définir pour mieux repartir</b> : L’audit web expose les forces et les défauts, qui seront corrigés par des recommandations. Le but est de repartir sur de bonnes bases.
                        </li>
                        <li class="">
                            <b>Optimiser les conversions</b> : Définir les objectif de votre site internet (prise de contact, présentation de vos services, vente de produits en ligne...) et optimiser la navigation client pour surpasser vos objectifs. Créations de tableaux dynamiques pour suivre l'activité sur votre site internet et la réalisation de vos objectifs grâce à l'intégration de balises de conversion.
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Nos outils -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="font-black font-title uppercase">
                    <h4 class="sub-title-2 text-gray-50">Comment</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Les domaines d'un <span class="text-mtom-orange">audit</span> de votre site web
                    </h2>
                </div>

                <div x-data="{
                    unOpen: true, toggleUn() { this.unOpen = true, this.deuxOpen = false, this.troisOpen = false, this.quatreOpen = false },
                    deuxOpen: false, toggleDeux() { this.deuxOpen = true, this.unOpen = false, this.troisOpen = false, this.quatreOpen = false },
                    troisOpen: false, toggleTrois() { this.troisOpen = true, this.unOpen = false, this.deuxOpen = false, this.quatreOpen = false },
                }">
                    <div class="md:flex md:space-x-6 mt-8 font-bold border-b pb-4">
                        <div class="flex items-center space-x-2 cursor-pointer" @click="toggleUn()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">1</span>
                            <h5 :class="unOpen ? 'text-mtom-orange' : ''">Audit technique</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleDeux()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">2</span>
                            <h5 :class="deuxOpen ? 'text-mtom-orange' : ''">Audit sémantique</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleTrois()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">3</span>
                            <h5 :class="troisOpen ? 'text-mtom-orange' : ''">Audit ergonomique</h5>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div x-show="unOpen">
                            <p>
                                Analyser les structures et les éléments techniques qui composent un site web. Dans ce type d’audit, il s’agit de repérer les éléments qui peuvent nuire au référencement. (Temps de chargement des pages, responsive design…)
                            </p>
                        </div>

                        <div x-show="deuxOpen">
                            <p class="">
                                Dans cette étape, nous allons analyser le contenu, les mots-clés et les autres éléments qui permettent au moteur de recherche de comprendre votre site web. (Balises, hiérarchisation du contenu H1, H2, H3…)
                            </p>
                        </div>

                        <div x-show="troisOpen">
                            <p>
                                Identifier l’architecture et la navigation globale du site web. Cette analyse permet de mettre en avant les irritants qui empêcheraient les internautes de convertir ou d’avoir les actions attendues.
                            </p>
                        </div>

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
                        <x-service-box service="optimisation_seo"></x-service-box>
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


