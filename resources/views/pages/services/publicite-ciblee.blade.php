<x-layouts.front-layout>

@section('title')Publicité ciblée | Google Ads - MtoM Création
@endsection

@section('meta-description')Mise en place d'une stratégie de publicité : Définition des objectifs, création et gestion des campagnes et optimisation du budget... On vous accompagne.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/marketing.png') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero" >

            <div class="lg:w-8/12">
                <h1
                    class="title-1 text-mtom-blue">
                    Publicité <span class="text-mtom-orange">ciblée</span> en ligne
                </h1>
                <p class="mt-10">
                    Vous souhaitez faire de la publicité en ciblant précisement votre clientèle ? Vous êtes à la bonne place. Nous vous aidons à mettre en place une stratégie et des campagnes de communication efficaces et ciblées grâce à Facebook Ads.
                </p>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/marketing.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-publicite-ciblee-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- Objectifs -->
        <div class="page-section-1 image-fond-texture flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Pourquoi</h4>
                    <h2 class="title-2 text-white">
                        Les avantages de <span class="text-mtom-orange">Facebook Ads</span>
                    </h2>
                </div>

                <div class="space-y-8 mt-8">

                    <div class="xl:flex xl:space-x-8 space-y-8 xl:space-y-0">

                        <x-icon-box-1 titre="Cibler précisément son audience">
                            Il est possible d’affiner sa cible et réussir à toucher parfaitement des internautes sans dépenser un gros budget.
                        </x-icon-box-1>

                        <x-icon-box-1 titre="Toucher des personnes sur mobile">
                            Les campagnes sur mobile obtiennent d’excellents résultats et un taux de conversion plus élevé.
                        </x-icon-box-1>
                    </div>

                    <div class="xl:flex xl:space-x-8 space-y-8 xl:space-y-0">

                        <x-icon-box-1 titre="Augmenter sa visibilité sur Facebook">
                            Le nombre de publicitaires sur Facebook a atteint les 5,5 milliards, il faut donc être de plus en plus malin pour se faire remarquer. Pour une entreprise, ajouter des campagnes publicitaires à sa stratégie est une stratégie gagnante.
                        </x-icon-box-1>

                        <x-icon-box-1 titre="Fidéliser ses visiteurs">
                            Facebook offre une fonctionnalité de remarketing très puissante. Le Pixel Facebook permet de repérer quels utilisateurs Facebook visitent votre site. Ainsi, vous pourrez créer une liste et cibler ces même personnes via des campagnes.
                        </x-icon-box-1>


                    </div>

                </div>

            </div>
        </div>

        <!-- Nos outils -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-gray-50">Comment</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Notre <span class="text-mtom-orange">fonctionnement</span>
                    </h2>
                </div>

                <div x-data="{
                    unOpen: true, toggleUn() { this.unOpen = true, this.deuxOpen = false, this.troisOpen = false, this.quatreOpen = false },
                    deuxOpen: false, toggleDeux() { this.deuxOpen = true, this.unOpen = false, this.troisOpen = false, this.quatreOpen = false },
                    troisOpen: false, toggleTrois() { this.troisOpen = true, this.unOpen = false, this.deuxOpen = false, this.quatreOpen = false },
                    quatreOpen: false, toggleQuatre() { this.quatreOpen = true, this.unOpen = false, this.deuxOpen = false , this.troisOpen = false},
                }">
                    <div class="md:flex md:space-x-6 mt-8 font-bold border-b pb-4">
                        <div class="flex items-center space-x-2 cursor-pointer" @click="toggleUn()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">1</span>
                            <h5 :class="unOpen ? 'text-mtom-orange' : ''">Définition des objectifs</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleDeux()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">2</span>
                            <h5 :class="deuxOpen ? 'text-mtom-orange' : ''">Budget et cible</h5>
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
                                La définition des objectifs permet de mettre en place une stratégie adaptée ainsi qu’un budget optimal pour les atteindre. Si vous débutez dans la publicité sur Facebook, nous commencerons avec de petits objectifs pour tester votre offre puis adapter les nouveaux objectifs en fonction des résultats obtenus.
                            </p>
                        </div>

                        <div x-show="deuxOpen">
                            <p class="">
                                Selon le budget alloué, nous pourrons vous fournir des prévisions sur le nombre de visites, le nombre de fans que vous pourrez obtenir, le nombre de conversions estimé… Nous ajusterons votre budget au besoin selon la popularité d’une campagne. Vous pouvez, si vous le souhaitez, arrêter en tout temps vos campagnes. La seconde étape est la définition de la cible. Les critères de recherche sont nombreux : âge, sexe, situation géographique et intérêts. Ainsi, vous pourrez cibler une audience précise qui répond à votre attente.
                            </p>
                        </div>

                        <div x-show="troisOpen">
                            <p>
                                Une fois les première étapes terminées, nous créons votre campagne : visuels, contenu, call-to-action qui permettront de faire convertir vos clients et/ou prospects.
                            </p>
                        </div>

                        <div x-show="quatreOpen">
                            <p>
                                Nous attendons toujours 48h avant d’ajuster les campagnes. Les internautes qui viennent de voir votre publicité, n’ont pas effectué de recherche sur vos produits et services (contrairement à Google Ads). Il faut donc surveiller leur première réaction et ajuster si besoin. Une fois le budget écoulé, nous prenons de temps de faire des statistiques et des recommandations pour les prochains campagnes.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Autres services -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class=" text-center">
                    <h4 class="sub-title-2 text-gray-50">Vos besoins</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Nos autres <span class="text-mtom-orange">services</span>
                    </h2>
                </div>
                <p class="text-center mt-3">
                    Une offre adaptée tous vos besoins ! <br>
                    Retrouvez les autres services que nous proposons pour faire rayonner votre marque.
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-10">
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


