<div class="">
    <div class="w-full">
        <label for="titre" class="block font-bold text-base mb-1">Titre</label>
        <input type="text" name="titre" id="titre"
               class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
               value="{{ isset($media->titre) ? $media->titre : old('titre') }}">
        @error('titre')
        <div class="text-base font-bold text-red-500">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

