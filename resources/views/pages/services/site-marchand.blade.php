<x-layouts.front-layout>

@section('title')Création de site web marchand - MtoM Création
@endsection

@section('meta-description')Création de site e-commerce. Conception, design et développement sur-mesure. Stratégie et optimisation SEO. Formation CMS. Création de boutique en ligne.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/site-marchand-image.png') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero" >

            <div class="lg:w-8/12">
                <h1
                    class="title-1 text-mtom-blue">
                    Création de <span class="text-mtom-orange">site web</span> marchand
                </h1>

                <div class="mt-5">
                    <x-avantages-site-web></x-avantages-site-web>
                </div>

                <p class="mt-8">
                    Vous souhaitez augmenter vos ventes ? Ne cherchez plus, la création d’une boutique en ligne vous permettra de mettre en avant vos produits ou vos services sans intermédiaire.
                    <br>
                    Vendez directement à VOS clients grâce à un site web marchand sur mesure !
                </p>

                <x-bouton-icon :lien="route('contact')">Contactez-nous</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/site-marchand-image.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-site-web-marchand-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- AVANTAGES -->
        <div class="image-fond-texture min-h-screen py-20 flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Pourquoi</h4>
                    <h2 class="title-2 text-white">
                        Les avantages d'une <span class="text-mtom-orange">boutique en ligne</span>
                    </h2>
                </div>

                <div class="mt-8 space-y-8">

                    <div class="xl:flex xl:space-x-8 space-y-8 xl:space-y-0">
                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Ouvert 24/7">
                                Plus aucune contrainte horaire ! Votre boutique en ligne reste ouverte 24/7 et vous pouvez vendre vos produits/services en tout temps.
                            </x-icon-box-1>
                        </div>

                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Des frais fixes réduits">
                                Que ce soit pour la création de votre site web marchand ou pour sa gestion, il n’a jamais été aussi abordable d’avoir sa propre boutique en ligne.
                            </x-icon-box-1>
                        </div>
                    </div>

                    <div class="xl:flex xl:space-x-8 space-y-8 xl:space-y-0">
                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Une extension de votre boutique physique">
                                Vous avez déjà une boutique physique ? Un site e-commerce pourrait venir en complément pour vous assurer une source de revenu supplémentaire et toucher de nouveaux clients.
                            </x-icon-box-1>
                        </div>

                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Plus aucune frontière">
                                Élargissez votre clientèle en n’ayant plus aucune contrainte géographique. Vendez où vous le souhaitez et touchez des clients du monde entier.
                            </x-icon-box-1>
                        </div>
                    </div>

                    <div class="xl:flex xl:space-x-8 space-y-8 xl:space-y-0">
                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Adaptée à la demande actuelle">
                                Depuis des années, les consommateurs sont de plus en plus nombreux à faire des achats en ligne. La pandémie n’a fait qu’accélérer cette tendance, ne manquez pas le mouvement !
                            </x-icon-box-1>
                        </div>

                        <div class="lg:w-1/2">
                            <x-icon-box-1 titre="Suivi de vos clients">
                                En plus de proposer une expérience personnalisée à vos clients, vous pouvez mettre en place des outils marketing puissants pour fidéliser votre clientèle.
                            </x-icon-box-1>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- COMMENT -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="font-black font-title uppercase">
                    <h4 class="sub-title-2 text-gray-50" style="margin-bottom: -40px">Comment</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Votre site web e-commerce en <span class="text-mtom-orange">4 étapes</span>
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
                            Lors du premier rendez-vous, nous faisons le point sur vos objectifs : vendre en ligne, fidéliser vos clients, augmenter votre panier moyen … Une fois ces objectifs définis ensemble, nous élaborerons un cahier des charges qui sera le fil rouge de votre projet.
                        </p>

                        <p x-show="deuxOpen" class="md:p-5 md:bg-gray-50 md:rounded-lg">
                            C’est ici que nous commençons l’intégration de vos produits et/ou services. Nous travaillons sur une arborescence de pages avec tous les éléments nécessaires à la conversion du client : titre du produit, description, photos, quantité, couleurs, taille, matériaux, prix et produits associés. Une fois validée, nous continuons à construire votre site e-commerce sur-mesure.
                        </p>

                        <p x-show="troisOpen" class="md:p-5 md:bg-gray-50 md:rounded-lg">
                            Nous validons ensemble tous les points stipulés dans le cahier des charges : produits, modes de paiement, méthodes de livraison, contenu, graphisme et fonctionnalités. Nous optimiserons également le site web pour favoriser son référencement naturel.
                        </p>

                        <p x-show="quatreOpen" class="md:p-5 md:bg-gray-50 md:rounded-lg">
                            Votre site e-commerce est en ligne ! Vous pouvez commencer à vendre vos produits. Dans un second temps, nous pourrons mettre en place différentes stratégies et outils pour optimiser votre boutique en ligne afin de favoriser vos ventes et la satisfaction de vos clients.
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
                        <x-accordeon titre="Hébergement pour la première année"
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
                        <x-accordeon titre="Conseil, soutien et outils d’amélioration"
                                     message="Une fois votre site en ligne, on est toujours là !! Nous effectuons une veille constante pour vous accompagner et vous proposer de nouveaux outils.  "></x-accordeon>
                    </div>
                </div>

                <div class="lg:w-1/2 mt-8 lg:mt-0">
                    <h2 class="title-2 text-mtom-blue">
                        Options <span class="text-mtom-orange">possibles</span>
                    </h2>
                    <div class="mt-4 flex-col space-y-4">
                        <x-accordeon titre="Mise à jour et modification de contenu"
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

                <div class="">
                    <h4 class="sub-title-2 text-gray-50 ">Réalisations</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Exemples de <span class="text-mtom-orange">sites marchands</span>
                    </h2>
                </div>

                <div class="mt-8 grid md:grid-cols-3 auto-rows-auto gap-10">
                    @foreach($projets as $projet)
                        <x-projet-box3 :projet="$projet"></x-projet-box3>
                    @endforeach
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
                        Avant même de commencer <b>la création de votre site web</b>, il est primordial de définir quels sont vos objectifs et vos attentes. Avoir une vitrine en ligne, présenter vos services, fidéliser et/ou acquérir une nouvelle clientèle... Grâce à ces éléments, nous pourrons vous <b>créer un site internet sur-mesure qui répond réellement à vos besoins</b> et qui sera un vrai plus pour votre activité.
                    </p>
                    <div class="space-y-8 mt-8">

                        <x-icon-box-faq-1 titre="Quels sont les délais pour la création d'un site web marchand ?"
                                      path="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z">
                            Pour la création d'un site web transactionnel, il faut compter en moyenne entre 2 et 3 mois. Cela va de l'élaboration du cahier des charges à la mise en ligne. Nous sommes capables de tenir des délais plus courts mais par expérience, la validation des propositions de maquettes est une phase qui prend toujours plus de temps que prévu.
                        </x-icon-box-faq-1>

                        <x-icon-box-faq-1 titre="Combien coûte la création d'un site web transactionnel ?"
                                      path="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            Il existe différents types de sites web transactionnels : boutique en ligne classique pour la vente de produits, réservation d'événements, réservation pour un site d'hébergement... Il faut aussi prendre en compte le nombre de produits à intégrer, le nombre de pays dans lesquels vous souhaitez vendre, les modes de livraison... Présentez-nous votre besoin et nous pourrons vous fournir une soumission détaillée.
                        </x-icon-box-faq-1>

                        <x-icon-box-faq-1 titre="Quels sont les coûts récurrents liés à l'utilisation d'un site web marchand ?"
                                      path="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            Dans le cas de Wordpress, les coûts récurrents de base sont l'hébergement et le nom de domaine. Pour l'hébergement Wordpress, nous proposons des solutions à 220$ par an. Concernant le nom de domaine, il faut compter en moyenne entre 15 et 25$ par année. Pour certains noms de domaine, les prix peuvent être plus élevés. (vous pouvez vous renseigner sur le site web GoDaddy). Il faut aussi prendre en compte les coûts liés aux modules de paiement choisis (Stripe, Paypal...) et aux éventuels extentions utilisées sur votre site.
                        </x-icon-box-faq-1>

                        <x-icon-box-faq-1 titre="Comment gérer sa boutique en ligne au quotidien ?"
                                          path="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            Vous pouvez gérer votre commerce en ligne depuis votre tableau de bord : gestion des produits, des nouvelles commandes, des stocks, des demandes de remboursement et de la livraison. Tout est centralisé sur une seule et même plateforme pour vous simplifier la vie.
                        </x-icon-box-faq-1>

                        <x-icon-box-faq-1 titre="Comment faire des modifications sur mon site web une fois en ligne ?"
                                      path="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">

                            Pas de panique ! Nous vous formons pour que vous soyez totalement autonome dans la gestion quotidienne de votre site web. Ajout de produits, modification des prix, création de codes promos, changement d'images, mises à jour de sécurité... Vous n'aurez plus besoin de personne.
                            <br>
                            Dans tous les cas, nous restons en soutien. Si vous avez besoin de notre aide, nous serons toujours là pour vous accompagner.
                        </x-icon-box-faq-1>

                    </div>
                </div>

            </div>
        </div>

        <!-- Autres services -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="font-black font-title uppercase text-center">
                    <h4 class="sub-title-2 text-gray-50">Vos besoins</h4>
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
                        <x-service-box service="maintenance"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="referencement_payant"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="site_vitrine"></x-service-box>
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


