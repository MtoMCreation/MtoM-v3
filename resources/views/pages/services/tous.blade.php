<x-layouts.front-layout>

@section('title')Création de site web vitrine - MtoM Création
@endsection

@section('meta-description')Création de site web vitrine. Conception, design et développement sur-mesure. Stratégie et optimisation SEO. Formation au CMS. Création de site web professionnel.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/site-vitrine-image.svg') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="pt-52 mb-40 container  lg:flex items-center md:space-x-14">

            <div class="lg:w-8/12">
                <h1
                    class="title-1 text-mtom-blue">
                    Tous nos <span class="text-mtom-orange">services</span>
                </h1>
                <p class="mt-10">
                    Découvrez tous nos services web : création de site web, stratégie web, design web, création de contenu, gestion des réseaux sociaux maintenance web et optimisation SEO. Nous vous accompagnons dans toutes les étapes, de la stratégie au lancement.
                </p>

                <x-bouton-icon :lien="route('contact')">Contactez-nous pour en savoir plus</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/image-services.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-tous-nos-services-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- SERVICES -->
        <div class="pb-52">
            <div class="container">

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-10">
                    <div class="">
                        <x-service-box service="site_vitrine"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="site_marchand"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="site_one_page"></x-service-box>
                    </div>
                    <div class="">
                        <x-service-box service="formation"></x-service-box>
                    </div>
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


