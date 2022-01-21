<x-layouts.front-layout>

@section('title')Gestion des réseaux sociaux - MtoM Création
@endsection

@section('meta-description')Nous aidons les entreprises à gérer leurs réseaux sociaux pour optimiser leur stratégie web et leur présence sur ces plateformes. Gérer ses réseaux sociaux.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/reseaux-sociaux-image.svg') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero">

            <div class="lg:w-8/12">
                <h1 class="title-1 text-mtom-blue">
                    Gestion des <br> <span class="text-mtom-orange">réseaux sociaux</span>
                </h1>
                <p class="mt-10">
                    Avec près 4,3 milliards de personnes actives sur les réseaux sociaux en 2021, être présent sur les réseaux sociaux n’est une option mais une obligation si vous souhaitez toucher vos clients. MtoM Création vous accompagne dans la gestion de vos médias sociaux en travaillant sur une identité digitale commune sur tous les réseaux associée à un planning de publications complet.
                </p>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/reseaux-sociaux-image.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-gestion-reseaux-sociaux-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- Objectifs -->
        <div class="page-section-1 image-fond-texture flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Pourquoi</h4>
                    <h2 class="title-2 text-white">
                        Pourquoi être présents sur les <span class="text-mtom-orange">réseaux sociaux</span> ?
                    </h2>
                </div>

                <div class="space-y-8 mt-8">
                    <div class="xl:flex xl:space-x-8 space-y-8 xl:space-y-0">
                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Fidéliser sa clientèle">
                                Il est bien plus facile de fidéliser un client que d’en convertir un nouveau. Prenez soin de vos client en maintenant une relation via les médias sociaux.
                            </x-icon-box-1>
                        </div>

                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Faire rayonner votre marque">
                                Les réseaux sociaux sont un très bon moyen de faire rayonner votre marque auprès d’un large public et à moindre frais. Ils permettent également de susciter un besoin.
                            </x-icon-box-1>
                        </div>
                    </div>

                    <div class="xl:flex xl:space-x-8 space-y-8 xl:space-y-0">
                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Augmenter votre notoriété">
                                1h20. C’est le temps journalier passé par un Canadien sur les réseaux sociaux. Il est donc important d’être présent correctement sur ces plateformes afin de capter votre clientèle et ses habitudes.
                            </x-icon-box-1>
                        </div>

                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Écouter et réagir avec vos clients">
                                Ecouter les commentaires de vos clients sur vos services et produits et réagir avec eux pour connaître leur remarques et leur ressenti sont une preuve d’une image de marque soignée et d’un gage de qualité.
                            </x-icon-box-1>
                        </div>
                    </div>

                </div>

                <div class="text-white mt-6 text-base">
                    <ul class="list-disc ml-6 flex-col space-y-4 mt-4 text-lg">

                    </ul>
                </div>

            </div>
        </div>

        <!-- COMMENT -->
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
                    <div class="md:flex md:space-x-6 mt-8 font-bold pb-4 border-b">
                        <div class="flex items-center space-x-2 cursor-pointer" @click="toggleUn()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">1</span>
                            <h5 :class="unOpen ? 'text-mtom-orange' : ''">Objectifs et cibles</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleDeux()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">2</span>
                            <h5 :class="deuxOpen ? 'text-mtom-orange' : ''">Quel réseau social</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleTrois()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">3</span>
                            <h5 :class="troisOpen ? 'text-mtom-orange' : ''">Mise en place d'une stratégie</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleQuatre()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">4</span>
                            <h5 :class="quatreOpen ? 'text-mtom-orange' : ''">Analyse et optimisation</h5>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div x-show="unOpen">
                            <p>
                                Audit de l’existant et définition des objectifs et de la cible. <br>
                                La question essentielle est : pourquoi souhaitez-vous être sur les réseaux sociaux et qui visez-vous ? La définition des objectifs est très important car c’est elle qui va guider vos actions. Vous voulez gagner en notoriété, augmenter vos ventes ou encore générer plus d’interactions sur vos sujets ? Tous ces objectifs ne s’accomplissent pas de la même façon.
                            </p>
                        </div>

                        <div x-show="deuxOpen">
                            <p class="font-black">Choisir le ou les réseaux sociaux où vous souhaitez communiquer.</p>
                            <ul class="list-disc ml-8 mt-4 flex-col space-y-4">
                                <li>
                                    <span class="underline font-bold">Facebook</span> : Cette plateforme très puissante permet de rejoindre des milliards de personnes et leurs intérêts en partageant des articles de blog, en créant des jeux concours, en créant un catalogue de produits, en diffusant vos vidéos ou encore en ciblant une clientèle particulière.
                                </li>
                                <li>
                                    <span class="underline font-bold">Instagram</span> : La première force d’Instagram, c’est le visuel. Sur ce média, on communique par la photo et puis c’est tout. Si vous disposez de sublimes photos ou si vous opérez dans un secteur où le visuel est important, alors vous devez être présents sur Instagram (toujours correctement). Depuis quelques années, la seconde force d’Instagram réside également dans les stories, ces mini-vidéo éphémères.
                                </li>
                                <li>
                                    <span class="underline font-bold">Linkedin</span> : Si votre cible est professionnel, alors LinkedIn sera votre plateforme de communication par excellence. Vous êtes en quête de nouveaux profils, vous vendez un service essentiel aux entreprises, vous opérez dans les ressources humaines… Ici, vous trouverez tous les outils dont vous avez besoin pour votre entreprise.
                                </li>
                            </ul>

                        </div>

                        <div x-show="troisOpen">
                            <p>
                                Le planning de publication permet d’avoir une vue d’ensemble des actions à mettre en place : publications hebdomadaires, jeu concours, campagnes publicitaires, partenariat, événement à diffuser. Il est important de varier le contenu afin de ne pas lasser ces internautes. Les types de contenus peuvent être : partage d’article de blog, texte, vidéo, album photo, story… C’est notre rôle de vous aider et de vous proposer des contenus attrayants et adaptés à votre cible.
                            </p>
                        </div>

                        <div x-show="quatreOpen">
                           <p>
                               Au bout de quelques semaines d’animation, nous faisons le point avec vous pour savoir si nous répondons aux objectifs définis préalablement. Nous analysons les statistiques pour faire apparaître la tendance globale puis nous ajustons le contenu si nécessaire. Enfin, nous travaillons toujours sur de nouvelles idées et suggestions pour améliorer votre présence sur les réseaux sociaux.
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
                        <x-service-box service="formation"></x-service-box>
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


