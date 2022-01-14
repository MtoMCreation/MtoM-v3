<x-layouts.back-layout>

    <x-slot name="header">
        Modifier projet {{ $projet->client }}
    </x-slot>

    <div class="bg-gray-100 rounded p-10 mt-10">

        <form action="{{ route('projet.update', $projet) }}"
              method="post"
              enctype="multipart/form-data"
              class="flex flex-col space-y-10">
            @csrf
            @method('PATCH')

            @include('projets.__form')

            <div class="flex space-x-4 items-center justify-end">
                <a href="{{ route('dashboard.projets') }}" class="px-4 py-1 bg-gray-300 font-bold text-white rounded inline">Annuler</a>
                <button type="submit" class="px-4 py-1 bg-mtom-gray font-bold text-white rounded inline">Enregistrer</button>
            </div>

        </form>

    </div>


</x-layouts.back-layout>
