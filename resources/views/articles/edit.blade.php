<x-layouts.back-layout>

    <x-slot name="header">
        Modifier article {{ $article->titre }}
    </x-slot>

    <div class="bg-gray-100 rounded p-10 mt-10">

        <form action="{{ route('article.update', $article) }}"
              method="post"
              enctype="multipart/form-data"
              class="flex flex-col space-y-10">
            @csrf
            @method('PATCH')

            @include('articles.__form')

            <div class="flex space-x-4 items-center justify-end">
                <a href="{{ route('article.show', $article) }}" target="_blank" class="px-4 py-1 bg-yellow-500 font-bold text-white rounded inline">Prévisualiser</a>
                <a href="{{ route('dashboard.projets') }}" class="px-4 py-1 bg-gray-300 font-bold text-white rounded inline">Annuler</a>
                <button type="submit" class="px-4 py-1 bg-green-500 font-bold text-white rounded inline">Enregistrer</button>
            </div>

        </form>

    </div>


</x-layouts.back-layout>
