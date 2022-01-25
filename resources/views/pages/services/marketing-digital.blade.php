<x-layouts.front-layout>

@section('title')Marketing Digital | Création de stratégie sur-mesure - MtoM Création
@endsection

@section('meta-description')Agence de marketing digital montréal. Gestion des médias sociaux. Gestion de campagne publicitaire. SEA. Création d'infolettre. Marketing numérique Montréal
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/marketing-numerique.png') }}
@endsection



<!------------------ Page content ------------------>

    <div>

        <!-- Hero page -->
        <div class="hero-section container lg:flex items-center md:space-x-14 pt-20 lg:pt-44">

            <div class="lg:w-8/12">
                <h1
                    class="title-1 text-mtom-blue">
                    <span class="text-mtom-orange">Marketing</span> digital
                </h1>
                <p class="mt-10 mb-5">
                    En plus de la <a href="{{ route('site-web') }}" class="font-bold">création de site web professionnel</a>, nous proposons des services de marketing numérique pour vous accompagner au mieux dans votre présence en ligne.
                    <br>
                    Que ce soit pour la <a href="{{ route('reseaux-sociaux') }}" class="font-bold">gestion de vos réseaux sociaux</a>, <a href="{{ route('optimisation-seo') }}" class="font-bold">l'optimisation SEO de votre site web</a> ou la création de <a href="{{ route('publicite-ciblee') }}" class="font-bold">publicité ciblée en ligne</a>, nous avons une solution <span class="font-bold">adaptée à tous vos besoins</span>.
                </p>
                <x-bouton-icon :lien="route('contact')">Contactez-nous pour en savoir plus</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/marketing-numerique.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-site-web-vitrine-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- SERVICES -->
        <div class="pb-40 mt-24">
            <div class="container">

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                    <div class="">
                        <x-service-box service="reseaux_sociaux"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="publicite_ciblee"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="referencement_payant"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="audit"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="optimisation_seo"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="maintenance"></x-service-box>
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


