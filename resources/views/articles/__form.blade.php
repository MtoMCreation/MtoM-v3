<div class="">
    <div class="w-full">
        <label for="titre" class="block font-bold text-base mb-1">Titre</label>
        <input type="text" name="titre" id="titre"
               class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
               value="{{ isset($article->titre) ? $article->titre : old('titre') }}">
        @error('titre')
        <div class="text-base font-bold text-red-500">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="md:flex space-y-10 md:space-y-0 md:space-x-10">
{{--    <div class="md:w-2/3">--}}
{{--        <div class="w-full">--}}
{{--            <label for="temps_lecture" class="block font-bold text-base mb-1">Temps de lecture en minutes</label>--}}
{{--            <input type="text" name="temps_lecture" id="temps_lecture"--}}
{{--                   class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"--}}
{{--                   value="{{ isset($article->temps_lecture) ? $article->temps_lecture : old('temps_lecture') }}">--}}
{{--            @error('temps_lecture')--}}
{{--            <div class="text-base font-bold text-red-500">--}}
{{--                {{ $message }}--}}
{{--            </div>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--    </div>--}}
</div>


<div class="md:flex space-y-10 md:space-y-0 md:space-x-10">
    <div class="md:w-1/3">
        <div class="w-full">
            <label for="date_publication" class="block font-bold text-base mb-1">Date de publication</label>
            <input type="text" name="date_publication" id="date_publication"
                   class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                   value="{{ isset($article->date_publication) ? $article->date_publication : old('date_publication') }}">
            @error('date_publication')
            <div class="text-base font-bold text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="md:w-1/3">
        <div class="w-full">
            <label for="date_publication_order" class="block font-bold text-base mb-1">Date de publication (ordre d'apparition)</label>
            <input type="date" name="date_publication_order" id="date_publication_order"
                   class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                   value="{{ isset($article->date_publication_order) ? $article->date_publication_order : old('date_publication_order') }}">
            @error('date_publication_order')
            <div class="text-base font-bold text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-1/3">
        <label for="etat_id" class="block font-bold text-base mb-1">Etat</label>
        <select name="etat_id" id="etat_id"
                class="w-full p-2 mt-1 {{ isset($article) ? ($article->publie() ? 'bg-green-100' : 'bg-red-100') : '' }} rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2">
            @foreach($etats as $etat)
                <option value="{{ $etat->id }}" @if(isset($article->etat->id)) {{ $article->etat->id === $etat->id ? 'selected' : '' }} @endif
                class="">
                    {{ $etat->nom }}
                </option>
            @endforeach
        </select>
        @error('etat_id')
        <div class="text-base font-bold text-red-500">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="w-full"
     x-data="{meta_titre: '{{ isset($article->meta_titre) ? $article->meta_titre : old('meta_titre') }}',
            limit: $el.dataset.limit,
             get remaining() {
                return this.limit - this.meta_titre.length
            }}" data-limit="60">
    <label for="meta_titre" class="block font-bold text-base mb-1">Méta titre</label>
    <input id="meta_titre"
           name="meta_titre"
           x-model="meta_titre"
           value="{{ isset($article->meta_titre) ? $article->meta_titre : old('meta_titre') }}"
           class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2">
    <p id="remaining" class="text-sm text-gray-500">
        <span x-text="remaining"></span> caractères restants.
    </p>
    @error('meta_titre')
    <div class="text-base font-bold text-red-500">
        {{ $message }}
    </div>
    @enderror
</div>

{{--<div class="">--}}
{{--    <div class="w-full">--}}
{{--        <label for="meta_description" class="block font-bold text-base mb-1">Meta description</label>--}}
{{--        <input type="text" name="meta_description" id="meta_description"--}}
{{--               class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"--}}
{{--               value="{{ isset($article->meta_description) ? $article->meta_description : old('meta_description') }}">--}}
{{--        @error('meta_description')--}}
{{--        <div class="text-base font-bold text-red-500">--}}
{{--            {{ $message }}--}}
{{--        </div>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--</div>--}}

<div class="w-full"
     x-data="{meta_description: '{{ isset($article->meta_description) ? $article->meta_description : old('meta_description') }}', limit: $el.dataset.limit,
             get remaining() {
                return this.limit - this.meta_description.length
            }}" data-limit="160">
    <label for="meta_description" class="block font-bold text-base mb-1">Méta description</label>
    <textarea name="meta_description" id="meta_description" rows="2" class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2" x-model="meta_description" x-text="meta_description">{{ isset($article->meta_description) ? $article->meta_description : old('meta_description') }}</textarea>
    <p id="remaining" class="text-sm text-gray-500">
        <span x-text="remaining"></span> caractères restants.
    </p>
    @error('meta_description')
    <div class="text-base font-bold text-red-500">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="flex">
    <div class="w-full">
        <label for="image" class="block font-bold text-base mb-1">Image</label>
        <input type="file" name="image" id="image"
               class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
               value="{{ isset($article->image) ? $article->image : old('image') }}">
        @error('image')
        <div class="text-base font-bold text-red-500">
            {{ $message }}
        </div>
        @enderror
    </div>
    @if(isset($article->image))
        <img src="{{ asset($article->image) }}" style="width: 100px" alt="">
    @endif
</div>


<div class="w-full">
    <label for="description" class="block font-bold text-base mb-1">Description</label>
    <textarea name="description" id="description" rows="5" class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2">{{ isset($article->description) ? $article->description : old('description') }}</textarea>
    @error('description')
    <div class="text-base font-bold text-red-500">
        {{ $message }}
    </div>
    @enderror
</div>


<div class="w-full">
    <label for="contenu" class="block font-bold text-base mb-1">Contenu</label>
    <textarea name="contenu" id="contenu" rows="25" class="tinymce p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2">{{ isset($article->contenu) ? $article->contenu : old('contenu') }}</textarea>
    @error('contenu')
    <div class="text-base font-bold text-red-500">
        {{ $message }}
    </div>
    @enderror
</div>
