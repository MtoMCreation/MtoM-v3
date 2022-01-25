<x-layouts.front-layout>

@section('title')Création de site web Professionnel sur-mesure - MtoM Création
@endsection

@section('meta-description')Création de site web Professionnel. Conception, design et développement sur-mesure. Stratégie et optimisation SEO. Formation au CMS. Création de site web professionnel.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/rocket.png') }}
@endsection


<!------------------ Page content ------------------>

    <!-- Hero page -->
    <div class="hero-section container lg:flex items-center md:space-x-14 pt-20 lg:pt-44">

        <div class="lg:w-8/12">
            <h1
                class="title-1 text-mtom-blue">
                Création de <span class="text-mtom-orange">site web</span> professionnel
            </h1>
            <p class="mt-10">
                Nous vous accompagnons dans la création de votre <b>site web professionnel 100% personnalisable</b>. Notre promesse : nous créons un site web qui vous appartient, aucun engagement, un site web évolutif qui saura s'adapter à vos futurs besoins, un site web que vous pouvez gérer en toute autonomie.
                Que ce soit pour présenter l'activité de votre entreprise, accroitre votre notoriété, vous positionner en haut de résultats de recherche, vendre vos produits en ligne... vous pouvez nous faire confiance pour la réalisation de projet web !
            </p>

            {{--                <x-bouton-icon :lien="route('contact')">Contactez-nous pour en savoir plus</x-bouton-icon>--}}
        </div>

        <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
            <img src="{{ asset('storage/img/visuels/rocket.svg') }}"
                 class=" w-80 lg:w-full mx-auto lg:mx-0"
                 alt="visuel-site-web-vitrine-{{ config('app.tagline-slug') }}">
        </div>

    </div>

    <!-- SERVICES -->
    <div class="mt-24 pb-40">
        <div class="container">

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                <div class="">
                    <x-service-box service="site_vitrine"></x-service-box>
                </div>
                <div class="">
                    <x-service-box service="site_marchand"></x-service-box>
                </div>
                <div class="">
                    <x-service-box service="site_one_page"></x-service-box>
                </div>

            </div>

        </div>
    </div>

    <x-call-to-action-1></x-call-to-action-1>

    <!------------------ CSS ------------------>
    <x-slot name="custom_css">

    </x-slot>


</x-layouts.front-layout>


