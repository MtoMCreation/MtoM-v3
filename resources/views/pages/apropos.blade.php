<x-layouts.front-layout>

@section('title')À Propos - MtoM Création
@endsection

@section('meta-description')Tout savoir sur la création de site web, le SEO, la stratégie numérique, le deisgn, les tendances numériques... Découvrez notre blogue spécialisé
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/a-propos-image.png') }}
@endsection

    <!------------------ Page content ------------------>

    <div>

        <!-- Hero page à propos -->
        <div class="hero-section h-hero container lg:flex items-center md:space-x-14 py-20">

            <div class="lg:w-8/12">
                <h1 class="title-1 text-mtom-blue">
                    À propos de <span class="text-mtom-orange">MtoM Création</span>
                </h1>
                <p class="mt-10">
                    MtoM Création est une entreprise spécialisée dans la création de sites web et l’élaboration de stratégie numérique.
                    Basée à Montréal, nous travaillons avec les TPE et PME montréalaises et québécoises dans des secteurs très diversifiés : tourisme, restauration, blogue, sport, OBNL…
                    Née de l’union de deux partenaires d’horizons professionnels différents, nous avions cependant une aspiration commune : créer des outils digitaux sur-mesure qui répondent aux besoins précis de chaque entreprise.
                    <br>
                    Nous ne nous considérons pas comme une agence web mais plutôt comme la collaboration de deux personnes passionnées par leur travail, qui placent la confiance et l’humain au coeur de leur stratégie.
                </p>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/a-propos-image.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="image-a-propos-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- Nos forces -->
        <div class="page-section-1 image-fond-texture flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Pourquoi</h4>
                    <h2 class="title-2 text-white">
                        Nos forces, des atouts pour <span class="text-mtom-orange">votre entreprise</span>
                    </h2>
                </div>

                <div class="text-white mt-6 text-base">
                    <ul class="list-disc ml-4 flex-col space-y-4 text-xl">
                        <li class="">
                            Un service personnalisé pour chaque entreprise : nous mettons un point d’honneur à rencontrer et discuter avec tous nos clients avant de commencer un mandat. Chaque entreprise a des besoins et des attentes différentes et nous aimons les cerner avant d’entreprendre le travail.
                        </li>
                        <li>
                            Une relation de confiance : nous pensons que la confiance entre le prestataire et l’entreprise est le socle d’une relation d’affaire durable. Nous vendons de la confiance avant de vendre notre savoir-faire :)
                        </li>
                        <li>
                            Une transparence dans les projets : nous essayons d’être le plus clair possible avec nos interlocuteurs. Nous ne faisons appel à aucun intermédiaire pour assurer un travail de qualité, sans surprise à la fin. Payez uniquement pour ce dont vous avez besoin !
                        </li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- Nos outils -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="text-center">
                    <h4 class="sub-title-2 text-gray-50">Comment</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Nos principaux <span class="text-mtom-orange">outils</span>
                    </h2>
                </div>

                <div class="mt-10 space-x-6 text-center space-y-6">
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/wordpress-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/shopify-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/lk-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/insta-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/faceb-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/google-analytics-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/ga.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/google-tag-manager-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/sendinblue-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/mailchimp-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/adobe-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                    <div class="inline-flex w-11 md:w-20">
                        <img src="{{ asset('storage/img/logo-outils/figma-logo.png') }}"
                             alt="image-outil-{{ config('app.tagline-slug') }}">
                    </div>
                </div>


            </div>
        </div>



    </div>

    <!------------------ CSS ------------------>
    <x-slot name="custom_css">

    </x-slot>


</x-layouts.front-layout>


