<x-layouts.front-layout>

@section('title')Nos formations web - MtoM Création
@endsection

@section('meta-description')Découvrez comment améliorer votre référencement SEO pour booster votre visibilité et augmenter le trafic sur votre site web. Optimisation SEO de votre site.
@endsection

@section('og-meta-image'){{ asset('storage/img/visuels/formations-image.png') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="hero-section container lg:flex items-center md:space-x-14 py-20 h-hero">

            <div class="lg:w-8/12">
                <h1
                    class="title-1 text-mtom-blue">
                    Nos <span class="text-mtom-orange">Formations </span><br>en ligne
                </h1>
                <p class="mt-10">
                    Vous voulez être autonome et tout savoir sur une gestion professionnelle de vos réseaux sociaux, vous souhaitez vous lancer dans la conception d'un site web mais vous ne savez pas par où commencer, vous voulez en savoir plus sur les CMS les plus populaires... ? N'attendez plus ! Inscrivez-vous à nos formations en ligne.
                </p>
                <x-bouton-icon :lien="route('contact')">Contactez-nous pour en savoir plus</x-bouton-icon>
            </div>

            <div class="lg:w-4/12 md:ml-6 mt-10 lg:-mt-0">
                <img src="{{ asset('storage/img/visuels/formations-image.svg') }}"
                     class=" w-80 lg:w-full mx-auto lg:mx-0"
                     alt="visuel-formation-{{ config('app.tagline-slug') }}">
            </div>

        </div>

        <!-- Formations -->
        <div class="page-section-1 image-fond-texture flex items-center shadow-xl">
            <div class="container">

                <div class="">
                    <h4 class="sub-title-2 text-mtom-dark-blue">Se former</h4>
                    <h2 class="title-2 text-white">
                        Nos <span class="text-mtom-orange">formations</span>
                    </h2>
                </div>

                <div class="mt-8 space-y-8">

                    <x-icon-box-1 titre="La gestion des réseaux sociaux"
                                  path="M17 8l4 4m0 0l-4 4m4-4H3">
                        Nous vous aiderons à mieux exploiter les réseaux sociaux et à en tirer les avantages et bénéfices pour votre entreprise. Audit, définition des besoins et de la cible, stratégie de contenu, création de design.
                        <br>
                        <a href="{{ route('contact') }}"
                           class="text-mtom-orange">Contactez-nous pour en savoir plus</a>
                    </x-icon-box-1>

                    <x-icon-box-1 titre="La création d'un site web : Les questions à se poser avant de commencer"
                                  path="M17 8l4 4m0 0l-4 4m4-4H3">
                        Vous voulez vous lancer dans la création d'un site web mais vous ne savez pas par où commencer ? Vous avez besoin d'accompagnement pour identifier vos besoins, faire l'analyse de différents outils et CMS disponibles pour vous mieux vous orienter ? Notre formation est faite pour vous !
                        <br>
                        => Programme de la formation : Nous ferons le point sur les différentes étapes à respecter, une analyse complète des différents moyens de faire un site internet ainsi que des CMS les plus populaires et leur utilisation. L’objectif de la formation : être autonome pour choisir et utiliser les bon outils pour la création ou la mise à jour de votre site web.
                        <br>
                        <a href="{{ route('contact') }}"
                           class="text-mtom-orange">Contactez-nous pour en savoir plus</a>
                    </x-icon-box-1>

                    <x-icon-box-1 titre="6 leviers principaux pour améliorer sa présence en ligne"
                                  path="M17 8l4 4m0 0l-4 4m4-4H3">
                        Nous vous présenterons 6 leviers à optimiser pour une meilleure visibilité en ligne. Astuces, outils, bonnes pratiques pour améliorer vos supports de communication.
                        <br>
                        <a href="{{ route('contact') }}"
                           class="text-mtom-orange">Contactez-nous pour en savoir plus</a>
                    </x-icon-box-1>

                    <x-icon-box-1 titre="Formation sur-mesure"
                                  path="M17 8l4 4m0 0l-4 4m4-4H3">
                        Vous souhaitez un accompagnement personnalisé sur une thématique particulière ? Pas de troubles ! :) Nous nous ferons un plaisir de mettre en place une formation répondant spécifiquement à vos besoins et à vos attentes.
                        <br>
                        <a href="{{ route('contact') }}"
                           class="text-mtom-orange">Contactez-nous pour en savoir plus</a>
                    </x-icon-box-1>

                </div>

            </div>
        </div>

        <!-- Faire une demande de formation -->
        <div class="page-section-1 flex items-center shadow-xl">
            <div class="container">

                <div class="text-center">
                    <h4 class="sub-title-2 text-gray-50">Comment</h4>
                    <h2 class="title-2 text-mtom-blue">
                        Faire une demande <span class="text-mtom-orange">d'inscription</span>
                    </h2>
                </div>

                <div class="mt-8 mx-auto" style="max-width: 900px">
                    <form method="post" action="{{ route('form.formation') }}"
                          class="bg-white shadow-md border-4 border-gray-50 rounded-2xl p-5 md:p-10">
                        @csrf
                        @method('POST')
                        <div class="md:flex md:space-x-6 mb-6">
                            <div class="mb-6 md:w-1/3">
                                <label class="custom-label" for="nom">
                                    Nom
                                </label>
                                <input class="custom-input" name="nom" id="nom" type="text">
                                @error('nom')
                                <span class="form-error-span">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 md:w-1/3">
                                <label class="custom-label" for="telephone">
                                    Téléphone
                                </label>
                                <input class="custom-input" name="telephone" id="telephone" type="text" placeholder="514...">
                                @error('telephone')
                                <span class="form-error-span">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 md:w-1/3">
                                <label class="custom-label" for="email">
                                    Email
                                </label>
                                <input class="custom-input" name="email" id="email" type="email" placeholder="@">
                                @error('email')
                                <span class="form-error-span">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-10">
                            <label class="custom-label" for="formation">
                                Pour quelle formations souhaitez-vous faire une demande
                            </label>
{{--                            <input class="custom-input" type="text" name="formation" id="formation"  placeholder="">--}}
                            <select name="formation" id="formation"
                                    class="w-full p-2 mt-1 bg-white rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2">
                                <option value="La gestion des réseaux sociaux">
                                    La gestion des réseaux sociaux
                                </option>
                                <option value="La création d'un site web : Les questions à se poser avant de commencer">
                                    La création d'un site web : Les questions à se poser avant de commencer
                                </option>
                                <option value="6 leviers principaux pour améliorer sa présence en ligne">
                                    6 leviers principaux pour améliorer sa présence en ligne
                                </option>
                                <option value="Formation sur-mesure">
                                    Formation sur-mesure
                                </option>
                            </select>
                            @error('formation')
                            <span class="form-error-span">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="custom-label" for="username">
                                Message
                            </label>
                            <textarea name="message" id="message" cols="7" class="custom-input"></textarea>
                            @error('message')
                            <span class="form-error-span">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-mtom-orange hover:bg-mtom-blue-2 text-white font-bold px-6 py-1 rounded-full transition focus:outline-none focus:shadow-outline" type="submit">
                                Envoyer votre demande
                            </button>
                        </div>
                    </form>
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

    <!------------------ CSS ------------------>
    <x-slot name="custom_css">

    </x-slot>


</x-layouts.front-layout>


