<x-layouts.front-layout>

@section('title')Nos projets | Réalisations - MtoM Création, sites web et stratégie digitale
@endsection

@section('meta-description')Nos réalisations : création de site web vitrine, conception de site web marchand, formation digitales, stratégie numériques... Portfolio de MtoM Création
@endsection

@section('og-meta-image'){{ asset('storage/img/building-websites.svg') }}
@endsection

<!------------------ Page content ------------------>

    <div class="container lg:flex items-center md:space-x-14 pt-20 lg:pt-44" >

        <div class="lg:w-8/12 lg:mr-10">
            <h1
                class="font-title font-black text-5xl text-mtom-blue uppercase">
                Nos <span class="text-mtom-orange">réalisations</span>
            </h1>

            <h4
                class="mt-5 font-bold text-mtom-blue text-xl">
                lls nous ont fait confiance pour leurs projets digitaux.
            </h4>

            <p class="mt-2">
                Voici des exemples de nos dernières réalisations. <a href="{{ route('site-vitrine') }}">Création de site web vitrine</a>,
                <a href="{{ route('site-marchand') }}">boutique en ligne</a>, <a
                    href="{{ route('reseaux-sociaux') }}">gestion des réseaux sociaux</a>, stratégie digitale complète, <a href="{{ route('formations') }}">formations sur-mesure</a>... tout y est ! Toujours le même objectif, vous fournir les outils les plus adaptés pour répondre au mieux à vos besoins et vous accompagner dans la réalisation de vos objectifs.
            </p>

        </div>

        <div class="hidden lg:inline-flex lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
            <img src="{{ asset('storage/img/visuels/projets.svg') }}"
                 class=" w-80 lg:w-full mx-auto lg:mx-0"
                 alt="visuel-portfolio-creation-site-web-autres-services-{{ config('app.tagline-slug') }}">
        </div>

    </div>

    <div class="container pt-10 pb-20">
        <div class="mt-20">
            @livewire('pages.projets')
        </div>
    </div>

    <x-call-to-action-1></x-call-to-action-1>



</x-layouts.front-layout>


