<x-layouts.front-layout>

@section('title')Maintenance de site web - MtoM Création, sites web Montréal
@endsection

@section('meta-description')Maintenance de sites web Wordpress et Shopify : tout ce qu'il faut savoir pour assurer la pérennité et le succès de son site web. Bien mettre à jour son site.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/maintenance.png') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero">

            <div class="lg:w-8/12">
                <h1 class="title-1 text-mtom-blue ">
                    Maintenance de votre <br><span class="text-mtom-orange">site web</span>
                </h1>
                <p class="mt-10">
                    Il est toujours un peu gênant d’entendre un client vous dire que votre site web est lent, qu’il n’est pas lisible sur mobile ou que le contenu est obsolète.
                    Le web évolue sans cesse et ses technologies avec. Les habitudes des internautes changent et il est important de garantir la pérennité et la fiabilité de votre support de communication.
                    Assurer la maintenance de son site web n’est pas toujours évident. Mal accompagné, la prise en charge de ce service peut s’avérer coûteuse et complexe. De l’analyse au résultat, notre processus de maintenance est cadré et régulier.
                </p>
                <x-bouton-icon :lien="route('contact')">Contactez-nous</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/maintenance.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-maintenance-de-site-web-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- Objectifs -->
        <div class="page-section-1 image-fond-texture flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Comment</h4>
                    <h2 class="title-2 text-white">
                        Comment maintenir son site web <span class="text-mtom-orange">à jour</span> ?
                    </h2>
                </div>

                <div class="text-white mt-6 text-base">
                    <p>
                        Nous assurons une maintenance sur les plateformes Wordpress et Shopify, même si nous n’avons pas créé votre site web.
                    </p>
                    <ul class="list-disc ml-6 flex-col space-y-3 mt-4 text-lg">
                        <li class="">
                            <b>Sauvegarde hebdomadaire et complète de votre site.</b>
                        </li>
                        <li class="">
                            <b>Mise à jour globale : CMS, plugins et thème</b>
                        </li>
                        <li class="">
                            <b>Sécurité du site web</b>
                        </li>
                        <li class="">
                            <b>Résolutions de problèmes : une fonctionnalité ne marche plus ? Contactez-nous !</b>
                        </li>
                        <li class="">
                            <b>Ajustement de la performance et du SEO</b>
                        </li>
                        <li class="">
                            <b>Modifications du site web : contenu, visuels, produits …</b>
                        </li>
                    </ul>
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


