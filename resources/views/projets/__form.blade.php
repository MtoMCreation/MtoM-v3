<div class="flex space-x-10">

    <div class="w-3/4 flex flex-col space-y-5">
        <div class="">
            <div class="w-full">
                <label for="client" class="block font-bold text-base mb-1">Titre / Client</label>
                <input type="text" name="client" id="client"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->client) ? $projet->client : old('client') }}">
                @error('client')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="">
            <div class="w-full">
                <label for="client" class="block font-bold text-base mb-1">Description prestation</label>
                <input type="text" name="description_prestation" id="description_prestation"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->description_prestation) ? $projet->description_prestation : old('description_prestation') }}">
                @error('description_prestation')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="">
            <div class="w-full">
                <label for="date_publication" class="block font-bold text-base mb-1">Date de publication</label>
                <input type="text" name="date_publication" id="date_publication"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->date_publication) ? $projet->date_publication : old('date_publication') }}">
                @error('date_publication')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="">
            <div class="w-full">
                <label for="date_publication_order" class="block font-bold text-base mb-1">Date de publication (ordre d'apparition)</label>
                <input type="date" name="date_publication_order" id="date_publication_order"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->date_publication_order) ? $projet->date_publication_order : old('date_publication_order') }}">
                @error('date_publication_order')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="">
            <div class="w-full">
                <label for="lien_site" class="block font-bold text-base mb-1">Lien du site</label>
                <input type="text" name="lien_site" id="lien_site"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->lien_site) ? $projet->lien_site : old('lien_site') }}">
                @error('lien_site')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>


        <div class="w-full"
             x-data="{meta_titre: '{{ isset($projet->meta_titre) ? $projet->meta_titre : old('meta_titre') }}', limit: $el.dataset.limit,
             get remaining() {
                return this.limit - this.meta_titre.length
            }}" data-limit="60">
            <label for="meta_titre" class="block font-bold text-base mb-1">Méta titre</label>
            <input id="meta_titre"
                   name="meta_titre"
                   x-model="meta_titre"
                   value="{{ isset($projet->meta_titre) ? $projet->meta_titre : old('meta_titre') }}"
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

        <div class="w-full"
             x-data="{meta_description: '{{ isset($projet->meta_description) ? $projet->meta_description : old('meta_description') }}', limit: $el.dataset.limit,
             get remaining() {
                return this.limit - this.meta_description.length
            }}" data-limit="160">
            <label for="meta_description" class="block font-bold text-base mb-1">Méta description</label>
            <textarea name="meta_description" id="meta_description" rows="2" class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2" x-model="meta_description" x-text="meta_description">{{ isset($projet->meta_description) ? $projet->meta_description : old('meta_description') }}</textarea>
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
                <label for="logo" class="block font-bold text-base mb-1">Logo</label>
                <input type="file" name="logo" id="logo"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->logo) ? $projet->logo : old('logo') }}">
                @error('logo')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
            @if(isset($projet->logo))
                <img src="{{ asset($projet->logo) }}" style="width: 100px" alt="">
            @endif
        </div>

        <div class="flex">
            <div class="w-full">
                <label for="image" class="block font-bold text-base mb-1">Image</label>
                <input type="file" name="image" id="image"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->image) ? $projet->image : old('image') }}">
                @error('image')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
            @if(isset($projet->image))
                <img src="{{ asset($projet->image) }}" style="width: 100px" alt="">
            @endif
        </div>

        <div class="w-full">
            <label for="demande" class="block font-bold text-base mb-1">Demande / Présentation</label>
            <textarea name="demande" id="demande" rows="15" class="tinymce p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2">{{ isset($projet->demande) ? $projet->demande : old('demande') }}</textarea>
            @error('demande')
            <div class="text-base font-bold text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="flex">
            <div class="w-full">
                <label for="image_reponse" class="block font-bold text-base mb-1">Image réponse</label>
                <input type="file" name="image_reponse" id="image_reponse"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->image_reponse) ? $projet->image_reponse : old('image_reponse') }}">
                @error('image_reponse')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
            @if(isset($projet->image_reponse))
                <img src="{{ asset($projet->image_reponse) }}" style="width: 100px" alt="">
            @endif
        </div>

        <div class="w-full">
            <label for="reponse" class="block font-bold text-base mb-1">Réponse</label>
            <textarea name="reponse" id="reponse" rows="15" class="tinymce p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2">{{ isset($projet->reponse) ? $projet->reponse : old('reponse') }}</textarea>
            @error('reponse')
            <div class="text-base font-bold text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="w-full">
            <label for="temoignage" class="block font-bold text-base mb-1">Témoignage</label>
            <textarea name="temoignage" id="temoignage" rows="5" class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2">{{ isset($projet->temoignage) ? $projet->temoignage : old('temoignage') }}</textarea>
            @error('temoignage')
            <div class="text-base font-bold text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="">
            <div class="w-full">
                <label for="nom_temoignage" class="block font-bold text-base mb-1">Nom temoignage</label>
                <input type="text" name="nom_temoignage" id="nom_temoignage"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->nom_temoignage) ? $projet->nom_temoignage : old('nom_temoignage') }}">
                @error('nom_temoignage')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

    </div>

    <div class="w-1/4">

        <div class="">
            <div class="w-full">
                <label for="etat_id" class="block font-bold text-base mb-1">Etat</label>
                <select name="etat_id" id="etat_id"
                        class="w-full p-2 mt-1 bg-white rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2">
                    @foreach($etats as $etat)
                        <option value="{{ $etat->id }}" @if(isset($projet->etat->id)) {{ $projet->etat->id === $etat->id ? 'selected' : '' }} @endif
                        class="">
                            @if($etat->id === 1)
                                Brouillon
                            @elseif($etat->id === 2)
                                Publié
                            @endif
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

        <div class="border-b-2 border-t-2 mt-5">
            <div class="w-full mt-5 mb-5">
                    <div class="w-full">
                        <input type="checkbox" name="site_reference"
                               value="1"
                               class="accent-mtom-orange" @if(isset($projet)) {{ $projet->site_reference ? 'checked' : ' ' }} @endif>
                        <label for="categories" class="text-base mb-1">Site référence</label>
                    </div>
            </div>
        </div>

        <div class="">
            <div class="w-full mt-5 mb-5">
                <span class="block font-bold text-base mb-1">Catégories</span>
                @foreach($categories as $categorie)
                    <div class="w-full">
                        <input type="checkbox" name="categories[]"
                               value="{{ $categorie->id }}" @if(isset($projet)) @foreach($projet->categories as $cat) {{ $cat->id === $categorie->id ? 'checked' : '' }} @endforeach @endif
                               class="accent-mtom-orange">
                        <label for="categories" class="text-base mb-1">{{ $categorie->nom }}</label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
