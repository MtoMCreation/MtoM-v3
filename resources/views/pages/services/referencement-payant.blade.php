<x-layouts.front-layout>

@section('title')Publicité ciblée | Création de site web et stratégie numérique | MtoM Création
@endsection

@section('meta-description')Création de site web sur-mesure. Spécialisé dans les sites web vitrines et boutiques en ligne. Experts en conception de sites web et stratégies numériques.
@endsection

@section('og-meta-image'){{ asset('storage/img/building-websites.svg') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero">

            <div class="lg:w-8/12">
                <h1 class="title-1 text-mtom-blue">
                    Référencement <span class="text-mtom-orange">payant</span> <br>
                    Google Ads
                </h1>
                <p class="mt-10">
                    Google Ads est la plateforme de publicité du géant du web. Très populaire, elle permet d’afficher des annonces publicitaires en haut de page des résultats du moteurs de recherche en fonction des requêtes tapées et de la cible choisie.
                </p>
                <x-bouton-icon :lien="route('contact')">Contactez-nous pour en savoir plus</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/referencement-payant.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="">
            </div>

        </div>

        <!-- Objectifs -->
        <div class="page-section-1 image-fond-texture flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Pourquoi</h4>
                    <h2 class="title-2 text-white">
                        Les avantages de <span class="text-mtom-orange">Google Ads</span>
                    </h2>
                </div>

                <div class="text-white mt-6 text-base">
                    <p>
                        Pourquoi utiliser les campagnes Ads dans sa stratégie web ? Avant de vous lancer dans la création de campagnes publicitaires sur Google Ads, il est important de définir vos objectifs pour de pas dépenser votre pudget inutilement. Que ce soit pour augmenter votre visibilité sur le web, acquérir de nouveaux clients, augmenter votre taux de conversion... Les techniques ulilisées ne sont pas les mêmes.
                        Une définition précise de vos objectifs en amont permet de répondre à vos besoins en optimisant au maximum votre budget.
                        Les principaux avantages sont :
                    </p>
                    <ul class="list-disc ml-6 flex-col space-y-4 mt-4 text-lg">
                        <li class="">
                            <b>Même avec peu de budget, vous verrez des résultats très rapidement</b>
                        </li>
                        <li class="">
                            <b>Vous augmenterez votre visibilité à coup sûr !</b>
                        </li>
                        <li class="">
                            <b>De la publicité ciblée sur votre clientèle</b>
                        </li>
                        <li class="">
                            <b>Des rapports précis sur la réalisation de vos objectifs</b>
                        </li>
                        <li class="">
                            <b>Si vous voulez tout arrêter, vous pouvez sans frais ni engagement !</b>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Nos outils -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-gray-50">Comment</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Mise en place d'une <span class="text-mtom-orange">stratégie</span> de campagne
                    </h2>
                </div>

                <p class="mt-6">
                    Vous souhaitez vous lancer dans la création de campagnes publicitaires sur Google Ads pour placer vos annonces en haut des résultats de recherche ? Voici notre fonctionnement pour une stratégie gagnante à coup sûr !
                </p>

                <div x-data="{
                    unOpen: true, toggleUn() { this.unOpen = true, this.deuxOpen = false, this.troisOpen = false, this.quatreOpen = false },
                    deuxOpen: false, toggleDeux() { this.deuxOpen = true, this.unOpen = false, this.troisOpen = false, this.quatreOpen = false },
                    troisOpen: false, toggleTrois() { this.troisOpen = true, this.unOpen = false, this.deuxOpen = false, this.quatreOpen = false },
                    quatreOpen: false, toggleQuatre() { this.quatreOpen = true, this.unOpen = false, this.deuxOpen = false , this.troisOpen = false},
                }">
                    <div class="md:flex md:space-x-6 mt-8 font-bold border-b pb-4">
                        <div class="flex items-center space-x-2 cursor-pointer" @click="toggleUn()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">1</span>
                            <h5 :class="unOpen ? 'text-mtom-orange' : ''">Quels objectifs ?</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleDeux()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">2</span>
                            <h5 :class="deuxOpen ? 'text-mtom-orange' : ''">Votre cible</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleTrois()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">3</span>
                            <h5 :class="troisOpen ? 'text-mtom-orange' : ''">Création des campagnes</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleQuatre()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">4</span>
                            <h5 :class="quatreOpen ? 'text-mtom-orange' : ''">Analyse et optimisation</h5>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div x-show="unOpen">
                            <p>
                                Comme dit précédement, avant toute chose, il est primordial de définir quels sont vos objectifs. En d'autres termes, qu'attendez-vous de ces campagnes ? Vous souhaitez : augmenter la notoriété de votre marque en vous plaçant en haut des résultats de recherche, augmenter vos ventes en ligne sur un produit particulier, attirer une nouvelle clientèle... En fonction de vos attentes, la stratégie à adopter ne sera pas la même et une mauvaise définition de vos objectifs aura pour effet de vous faire dépenser votre budget inutilement.
                                <br>
                                Vous ne savez pas par où commencer ? Pas de panique, nous sommes là pour vous guider étapes par étapes et mettre en place une stratégie sur mesure.
                            </p>
                        </div>

                        <div x-show="deuxOpen">
                            <p class="">
                                Après avoir validé vos objectifs, la seconde étape est de définir votre cible et définir votre budget. La plateforme Google Ads nous permet de cibler de façon précise l'audience à laquelle vos annonces vont être difusées. Un ciblage précis permet donc d'avoir des campagnes performantes qui touchent directement votre clientèle.
                            </p>
                        </div>

                        <div x-show="troisOpen">
                            <p>
                                Durant cette phase, nous utilisons l'ensemble des éléments vus précédement pour créer vos campagnes publicitaires. Nous définissons les mots-clés les plus pertinents, les cibles, la répartition des budgets par support... Aussi, nous intégrons les objectifs de conversion et segmentons au maximum les campagnes pour analyser les résultats de façon précise.
                                <br>
                                Dans les faits, la mise en place de campagnes pertinentes est bien plus complexe mais nous restons à vos côtés et vous expliquons comment nous procédons pour que vous sachiez comment votre budget est utilisé.
                            </p>
                        </div>

                        <div x-show="quatreOpen">
                            <p>
                                Une fois les campagnes créées et lancées, nous vous mettons à disposition des rapports détaillés reprenant les principaux indicateurs de performance. Cela nous/vous permet d'analyser les premiers résultats, de les confronter à vos objectifs et de faire les ajustements nécessaires.
                                <br>
                                Là encore, pas de panique, tant que vos campagnes sont en ligne nous nous occupons de tout !
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
                    Une offre adaptée tous vos besoins ! <br>
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
                        <x-service-box service="publicite_ciblee"></x-service-box>
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


