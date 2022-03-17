<x-layouts.front-layout>

@section('title'){{ $projet->meta_titre }}
@endsection

@section('meta-description'){{ $projet->meta_description }}
@endsection

@section('og-meta-image'){{ asset($projet->image) }}
@endsection

    <div style="background-image: url({{ asset($projet->image) }}); background-position: center; background-size: cover;background-repeat: no-repeat; background-attachment: fixed; height: 500px;" class="hidden md:block">
    </div>

    <div class="md:hidden">
        <img src="{{ asset($projet->image) }}" class="w-full" alt="image-presentation-client-{{$projet->client}}-{{config('app.tagline-slug')}}">
    </div>

    <div class="pt-20 container lg:pb-20 bg-white lg:border-t-4 lg:border-mtom-blue lg:rounded-md lg:-mt-20 max-w-[1000px]">

        <div class="md:flex items-center justify-center md:space-x-10">
            <div class="text-center">
                <div class="mb-10 md:mb-0">
                    <img src="{{ asset($projet->logo) }}" class="mx-auto w-[150px] md:w-[200px]"
                         alt="logo-client-{{$projet->client}}-{{config('app.tagline-slug')}}">
                </div>
            </div>
            <div class="text-center md:text-left">
                <h1 class="text-4xl font-title font-title font-bold mt-8">
                    {{ $projet->client }}
                </h1>
                <a href="{{ $projet->lien_site }}" target="_blank"
                   class="mt-6 inline-flex items-center justify-center space-x-4 px-5 py-2 bg-mtom-gray hover:bg-mtom-orange transition rounded-full text-white">
                    <h4 class="font-title text-sm font-bold uppercase">Voir le site web</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>

        @auth()
            <a href="{{ route('projet.edit', $projet) }}"
               target="_blank"
               class="hidden lg:inline-flex fixed bottom-[50px] left-[50px] flex justify-between items-center space-x-3 bg-gray-100 hover:bg-gray-300 transition shadow-lg p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[20px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
            </a>
        @endauth

        <div class="mt-5 py-5 border-b-2 border-gray-100">
            <div class="space-y-3 space-x-3">
                <h5 class="text-sm font-bold inline-flex">{{ $projet->date_publication }}</h5>
                @foreach($projet->categories as $categorie)
                    <span class="inline-flex text-sm px-3 py-1 bg-gray-100 rounded-full">{{ $categorie->nom }}</span>
                @endforeach
            </div>
        </div>

        <div class="mt-10">
            <div class="mt-4 text-xl leading- list-disc">
                {!! $projet->demande !!}
            </div>
        </div>
    </div>


    <div class="lg:-mt-20 pb-20">
        @if($projet->image_reponse)
            <div class="container my-10 text-center">
                <a href="{{ $projet->lien_site }}" target="_blank">
                    <img src="{{ asset($projet->image_reponse) }}" alt="image-prestation-client-{{$projet->client}}-{{config('app.tagline-slug')}}" class="w-full">
                </a>
            </div>
        @endif

        <div class="max-w-[1000px] container">

            <div class="mb-20 mt-6 article-content">
                <div class="mt-10 text-xl leading- list-disc" style="max-width: 900px; margin: auto">
                    {!! $projet->reponse !!}
                </div>
            </div>

            @if($projet->temoignage)
                <div class="mt-6 bg-gray-50 p-10 rounded-xl mb-20">
                    <div class="italic lg:flex lg:items-center lg:space-x-6">
                        <div class="text-mtom-orange hidden lg:block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </div>
                        <p>{!! $projet->temoignage !!}</p>
                    </div>
                    <div class="text-right mt-4 italic text-sm font-bold">
                        <p>{{ $projet->nom_temoignage }}</p>
                    </div>
                </div>
            @endif


            <div class="flex bg-[#021223] px-14 py-4 rounded-lg text-white">
                <div class="w-full md:w-2/3 flex flex-col justify-center">
                    <h4 class="font-title text-3xl mb-2">Vous avez envie de <br> <span class="text-mtom-orange">booster</span> votre projet ?</h4>
                    <div>
                        <x-bouton-icon :lien="route('presenter-projet')">Contactez-nous</x-bouton-icon>
                    </div>
                </div>
                <div class="hidden md:inline-flex w-1/3">
                    <img src="{{ asset('storage/img/visuels/to-the-stars-2.gif') }}" class="rounded" alt="image projet-gorczany-llc-MtoM Création - Création de site web et stratégies numerique à Montréal">
                </div>
            </div>

        </div>

        <div class="max-w-[1000px] container">

            <div class=" pt-12 border-t">
                <h4 class="font-title text-xl font-bold">Ils nous ont aussi fait confiance</h4>
                <div class="grid md:grid-cols-2 auto-rows-auto gap-10 mt-5">
                    @foreach($projets_similaires as $projet)
                        <a href="{{ route('projet.show', $projet) }}"
                           class="article-box flex flex-col justify-between md:transform hover:-translate-y-2 transition duration-500 ease-in-out">
                            <div class="article-box-content">
                                <img src="{{ asset($projet->image) }}" class="rounded" alt="image-projet{{ Str::slug($projet->client) }}-creation-site-web">
                                <div class="flex items-center justify-between mt-4">
                                    <h3 class="font-bold font-title text">{{ $projet->client }}</h3>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a href="{{ route('projets') }}"
                   class="mt-20 flex items-center justify-center space-x-4 px-5 py-2 bg-gray-100 hover:bg-gray-200 transition rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    <h4 class="font-title text-sm font-bold">Tous nos projets</h4>
                </a>

            </div>
        </div>
    </div>

    <x-call-to-action-1></x-call-to-action-1>

</x-layouts.front-layout>
