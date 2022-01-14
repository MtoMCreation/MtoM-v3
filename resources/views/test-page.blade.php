<x-layouts.front-layout>

    @section('title')Blogue | Création de site web et stratégie numérique | MtoM Création
    @endsection

    @section('meta-description')Création de site web sur-mesure. Spécialisé dans les sites web vitrines et boutiques en ligne. Experts en conception de sites web et stratégies numériques.
@endsection

@section('og-meta-image'){{ asset('storage/img/building-websites.svg') }}
@endsection

<!------------------ Page content ------------------>

    <div class="min-h-screen m-10 p-10 bg-gray-50 rounded border-4">
        <h1>Test : projet {{ $projet->client }}</h1>

        <div>

        </div>

        <div class="mt-10 p-10 border-4 border-mtom-orange rounded">
            @livewire('test-component', [$projet])
        </div>
    </div>


</x-layouts.front-layout>


