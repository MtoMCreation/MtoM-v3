<x-layouts.front-layout>

@section('title')Création de site web "One-Page" - MtoM Création
@endsection

@section('meta-description')Création de site one page. Conception, design et développement sur-mesure. Stratégie et optimisation SEO. Formation CMS. Création de site web one-page.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/site-one-page-image.png') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero" >

            <div class="lg:w-8/12">
                <h1
                    class="title-1 text-mtom-blue">
                    Création de <span class="text-mtom-orange">site web</span><br> "One Page"
                </h1>

                <div class="mt-5">
                    <x-avantages-site-web></x-avantages-site-web>
                </div>

                <p class="mt-8">
                    Vous voulez créer un site internet pour avoir une vitrine sur le web en allant à l'essentiel ?
                    Un site web one page est ce qu'il vous faut ! Parfait pour présenter votre activité simplement en une seule page tout en optimisant les conversions.
                </p>
                <x-bouton-icon :lien="route('contact')">Contactez-nous pour en savoir plus</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/site-one-page-image.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-site-web-one-page-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- Objectifs -->
        <div class="page-section-1 image-fond-texture flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Pourquoi</h4>
                    <h2 class="title-2 text-white">
                        Les <span class="text-mtom-orange">avantages</span> d'un site web "One Page"
                    </h2>
                </div>

                <div class="mt-6 text-base">
                    <p class="font-black text-xl ">
                        Aller à l'essentiel
                    </p>

                    <div class="mt-8 space-y-8">

                        <div class="xl:flex xl:space-x-8 space-y-8 xl:space-y-0">

                            <div class="lg:w-1/2">
                                <x-icon-box-1 titre="Être présents sur les moteurs de recherche">
                                    Avant de prendre contact avec vous, vos futurs clients voudront en savoir plus sur votre entreprise, sur vos clients et sur vos services. Il est donc important d’être visible pour ne pas céder de place à la concurrence.
                                </x-icon-box-1>
                            </div>

                            <div class="lg:w-1/2">
                                <x-icon-box-1 titre="Faire bonne impression dès le premier clic">
                                    Le site web est souvent le point d’entrée pour connaître une société. Le contenu intégré doit être à jour, donner la bonne information au bon moment et être tendance pour capter l’attention.
                                </x-icon-box-1>
                            </div>
                        </div>

                        <div class="xl:flex xl:space-x-8 space-y-8 xl:space-y-0">

                            <div class="lg:w-1/2">
                                <x-icon-box-1 titre="Acquérir de nouveaux clients">
                                    Une fois sur votre site web, le client doit se sentir séduit, captivé, étonné. Même si la prise de contact est encore offline, le rôle de votre site web est de convertir vos prospects.
                                </x-icon-box-1>
                            </div>

                            <div class="lg:w-1/2">
                                <x-icon-box-1 titre="Montrer votre expertise">
                                    Grâce à votre site web, vous pourrez mettre en avant vos services, vos valeurs et vos ambitions, votre savoir-faire et votre professionnalisme. Tout ça sur une seule page.
                                </x-icon-box-1>
                            </div>
                        </div>

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
                        Votre site web sur-mesure en <span class="text-mtom-orange">4 étapes</span>
                    </h2>
                </div>

                <div x-data="{
                    unOpen: true, toggleUn() { this.unOpen = true, this.deuxOpen = false, this.troisOpen = false, this.quatreOpen = false },
                    deuxOpen: false, toggleDeux() { this.deuxOpen = true, this.unOpen = false, this.troisOpen = false, this.quatreOpen = false },
                    troisOpen: false, toggleTrois() { this.troisOpen = true, this.unOpen = false, this.deuxOpen = false, this.quatreOpen = false },
                    quatreOpen: false, toggleQuatre() { this.quatreOpen = true, this.unOpen = false, this.deuxOpen = false , this.troisOpen = false},
                }">
                    <div class="md:flex md:space-x-6 mt-8 font-bold">
                        <div class="flex items-center space-x-2 cursor-pointer" @click="toggleUn()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">1</span>
                            <h5 :class="unOpen ? 'text-mtom-blue underline decoration-2 underline-offset-4' : ''">Identification des besoins</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleDeux()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">2</span>
                            <h5 :class="deuxOpen ? 'text-mtom-blue underline decoration-2 underline-offset-4' : ''">Développement</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleTrois()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">3</span>
                            <h5 :class="troisOpen ? 'text-mtom-blue underline decoration-2 underline-offset-4' : ''">Validation et mise en ligne</h5>
                        </div>

                        <div class="mt-4 md:mt-0 flex items-center space-x-2 cursor-pointer" @click="toggleQuatre()">
                            <span class="bg-mtom-orange rounded-full px-3 py-1 font-black text-white">4</span>
                            <h5 :class="quatreOpen ? 'text-mtom-blue underline decoration-2 underline-offset-4' : ''">Suivi et analyse</h5>
                        </div>
                    </div>

                    <div class="mt-4">
                        <p x-show="unOpen" class="md:p-5 md:bg-gray-50 md:rounded-lg">
                            Lors du premier rendez-vous, nous faisons le point sur vos attentes et vos besoins. L’objectif est de mettre toutes les idées à plat, définir les priorités et les ressources (temps, argent…) que vous pouvez engager sur ce nouveau projet. Votre site web ne doit pas devenir une nouvelle source de travail que vous ne pouvez pas assumer. Nous sommes là pour vous orienter et vous proposer une offre sur mesure qui vous conviendra parfaitement.. Nous élaborerons un cahier des charges qui sera le fil rouge de votre projet.
                        </p>

                        <p x-show="deuxOpen" class="md:p-5 md:bg-gray-50 md:rounded-lg">
                            Création de votre site web sur mesure <br>
                            C’est la phase de conception, là où vos idées prennent vie. Durant la création de votre site web, vous pourrez voir l’avancé grâce à un lien que nous vous transmettrons. Cela nous permettra d’avoir un retour sur vos premières impressions et de réajuster. Il arrive souvent que des idées qui vous paraissent bonnes sur le papier ne correspondent finalement pas ce que vous souhaitez. Nous restons donc en contact régulier pour que votre site web soit exactement ce que vous souhaitez.
                        </p>

                        <p x-show="troisOpen" class="md:p-5 md:bg-gray-50 md:rounded-lg">
                            Cette étape est la plus importante. Nous validons ensemble tous les points stipulés dans le cahier des charges : structure, contenu, graphisme, fonctionnalités. Nous optimiserons tous les outils pour favoriser le référencement de votre site web ainsi que des outils pour suivre le trafic.
                        </p>

                        <p x-show="quatreOpen" class="md:p-5 md:bg-gray-50 md:rounded-lg">
                            Nous restons là pour vous accompagner <br>
                            Après la mise en ligne, nous nous engageons à faire un suivi du référencement naturel de votre site web. Avoir un site web est essentiel mais s’il n’est pas vu, il ne sert à rien. Nous restons à vos cotés pour faire les ajustements nécessaires afin qu’il soit référencé au mieux sur les moteurs de recherche.
                        </p>

                    </div>
                </div>

            </div>
        </div>

        <!-- Inclus -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container lg:flex lg:space-x-8">

                <div class="lg:w-1/2">
                    <h2 class="title-2 text-mtom-blue">
                        Toujours <span class="text-mtom-orange">inclus</span>
                    </h2>
                    <div class="mt-4 flex-col space-y-4">
                        <x-accordeon titre="Achat ou transfert de nom de domaine"
                                     message="Si vous n’avez pas de encore de nom de domaine, nous en achetons un correspondant au nom de votre entreprise. Si vous avez déjà un nom de domaine, nous le réutilisons pour ne pas perdre en référencement"></x-accordeon>
                        <x-accordeon titre="Hebergement pour le première année"
                                     message="Nos prestations comprennent toujours l’hébergement de votre site web pour la première année. Les caractéristiques de chaque site web étant différentes, nous adaptons l’hébergement pour qu’il couvre tous vos besoins en terme de capacité et de trafic. Suivant l’évolution de site, il reste toujours ajustable. "></x-accordeon>
                        <x-accordeon titre="Sécurisation de votre site web"
                                     message="Nous nous engageons à mettre en place toutes les procédures nécessaires pour sécuriser votre site web"></x-accordeon>
                        <x-accordeon titre="Élaboration d'un cahier des charges"
                                     message="Le but est de commencer la conception de votre site web avec le maximum d’informations : couleurs, typographies, charte graphique, nombre de pages, architecture générale, modules complémentaires… "></x-accordeon>
                        <x-accordeon titre="Site web en responsive design"
                                     message="Nous vous créons un site web sur-mesure qui sera parfaitement adapté à une navigation sur ordinateur, téléphones intelligents et tablettes. "></x-accordeon>
                        <x-accordeon titre="Intégration de votre contenu"
                                     message="En plus de créer toute l’architecture, nous intégrons à votre site l’ensemble de votre catalogue. Que ce soit pour un site vitrine ou pour un site marchand, le but et de mettre en avant vos produits / services. "></x-accordeon>
                        <x-accordeon titre="Optimisation du référencement naturel (SEO)"
                                     message="Avoir un beau site web c’est bien, mais il ne sert à rien si personne ne le voit. Nous optimisons le contenu pour que votre site web soit le mieux référencé sur les moteurs de recherche. "></x-accordeon>
                        <x-accordeon titre="Conseilsn soutien et outils d'amélioration"
                                     message="Une fois votre site en ligne, on est toujours là !! Nous effectuons une veille constante pour vous accompagner et vous proposer de nouveaux outils.  "></x-accordeon>
                    </div>
                </div>

                <div class="lg:w-1/2 mt-8 lg:mt-0">
                    <h2 class="title-2 text-mtom-blue">
                        Options <span class="text-mtom-orange">possibles</span>
                    </h2>
                    <div class="mt-4 flex-col space-y-4">
                        <x-accordeon titre="Mises à jours et modification du contenu"
                                     message="Tous les mois, nous mettons à jour votre site web : nouvelles photos, nouveau texte, article de blogue, changement de menu … Contactez nous"></x-accordeon>
                        <x-accordeon titre="Analyse des performances"
                                     message="Afin de maximiser le trafic de votre site web et donc votre ROI, nous mettons à disposition les statistiques et analyses commentées avec des conseils et astuces pour l’améliorer. "></x-accordeon>
                        <x-accordeon titre="Site multilingue"
                                     message="Pour répondre à tous vos clients, nous créons un site en français et en anglais. Pour tout autre langue, contactez-nous. "></x-accordeon>
                        <x-accordeon titre="Formations Back Office"
                                     message="Nous pouvons vous former pour être 100% autonome sur votre site web. "></x-accordeon>
                        <x-accordeon titre="Prise de RDV en ligne"
                                     message="Vos clients pourront réserver une salle, un créneau horaire, un rdv chez le coiffeur ou l’esthéticienne … En un clic, ils consultent l’agenda en ligne, vérifient les places restantes puis réservent en direct. Possibilité de payer en ligne via ce module."></x-accordeon>
                        <x-accordeon titre="Intégration d'un live chat"
                                     message="Pour être en contact direct avec vos clients, nous pouvons intégrer un module de 'live chat' avec messages automatiques et personnalisés. "></x-accordeon>
                        <x-accordeon titre="Création de logo et charte graphique"
                                     message="Afin de vous définir une image de marque, nous travaillons avec une superbe graphiste qui créera votre identité visuelle : Logo & charte graphique que vous pourrez imprimer sur vos cartes d’affaires, pamphlets… "></x-accordeon>
                        <x-accordeon titre="Tout ce que vous souhaitez"
                                     message="Vous avez une autre demande ou un besoin particulier pour votre site web ? Nous sommes là pour vous accompagner et répondre à toutes vos attentes. Contactez-nous pour nous présenter votre demande. "></x-accordeon>
                    </div>
                </div>

            </div>
        </div>


        <!-- Exemple de réalisations -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="font-black font-title uppercase">
                    <h4 class="sub-title-2 text-gray-50" style="margin-bottom: -40px">Réalisations</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Exemples de <span class="text-mtom-orange">sites "one page"</span>
                    </h2>
                </div>

                <div class="mt-8 grid md:grid-cols-3 auto-rows-auto gap-10">
                    @foreach($projets as $projet)
                        <x-projet-box3 :projet="$projet"></x-projet-box3>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Autres services -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="font-black font-title uppercase text-center">
                    <h4 class="sub-title-2 text-gray-50" style="margin-bottom: -40px">Vos besoins</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Nos autres <span class="text-mtom-orange">services</span>
                    </h2>
                </div>
                <p class="text-center mt-3">
                    Une offre adaptée à tous vos besoins ! <br>
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
                        <x-service-box service="formation"></x-service-box>
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


