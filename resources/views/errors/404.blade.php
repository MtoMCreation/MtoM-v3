<x-layouts.front-layout>

    <div class="container h-hero flex flex-col justify-center items-center">
        <img src="{{ asset('storage/img/visuels/404.svg') }}" alt="visuel-page-404" style="width: 500px">
        <div class="mt-10">
            <h4 class="text-center font-bold">404</h4>
            <h4 class="text-center mt-2">Cette page n'existe pas/plus</h4>
            <a href="{{ route('accueil') }}" class="block px-4 py-2 rounded text-2xl bg-mtom-orange mt-2 font-bold">
                Retour à la page d'accueil
            </a>
        </div>
    </div>

</x-layouts.front-layout>
