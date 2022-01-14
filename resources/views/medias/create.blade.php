<x-layouts.back-layout>

    <x-slot name="header">
        Ajouter un media
    </x-slot>

    <div class="bg-gray-100 rounded p-10 mt-10">

        <form action="{{ route('media.store') }}"
              method="post"
              enctype="multipart/form-data"
              class="flex flex-col space-y-10">
            @csrf
            @method('POST')

            @include('medias.__form')

            <div class="flex">
                <div class="w-full">
                    <label for="media" class="block font-bold text-base mb-1">Media</label>
                    <input type="file" name="media" id="media"
                           class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                           value="{{ isset($media->media) ? $media->media : old('media') }}">
                    @error('media')
                    <div class="text-base font-bold text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                @if(isset($projet->logo))
                    <img src="{{ asset($projet->logo) }}" style="width: 100px" alt="">
                @endif
            </div>

            <div class="flex space-x-4 items-center justify-end">
                <button type="submit" class="px-4 py-1 bg-mtom-gray font-bold text-white rounded inline">Ajouter</button>
                <a href="{{ route('dashboard.projets') }}" class="px-4 py-1 bg-gray-300 font-bold text-white rounded inline">Annuler</a>
            </div>

        </form>

    </div>


</x-layouts.back-layout>
