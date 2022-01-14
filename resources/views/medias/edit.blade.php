<x-layouts.back-layout>

    <x-slot name="header">
        Modifier media : {{ $media->titre }}
    </x-slot>

    <div class="bg-gray-100 rounded p-10 mt-10">

        <form action="{{ route('media.update', $media) }}"
              method="post"
              enctype="multipart/form-data"
              class="flex flex-col space-y-10">
            @csrf
            @method('PATCH')

            <div>
                <img src="{{ asset($media->url) }}" alt="{{ $media->balise_alt }}" style="width: 300px; margin: auto">
            </div>

            @include('medias.__form')

            <div class="flex space-x-4 items-center justify-end">
                <button type="submit" class="px-4 py-1 bg-mtom-gray font-bold text-white rounded inline">Enregistrer</button>
                <a href="{{ route('dashboard.projets') }}" class="px-4 py-1 bg-gray-300 font-bold text-white rounded inline">Annuler</a>
            </div>

        </form>

    </div>


</x-layouts.back-layout>
