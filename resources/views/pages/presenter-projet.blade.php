<x-layouts.front-layout>

    <div class="py-20 md:py-32 container">

        <div class="text-center max-w-[1000px] mx-auto">
            <h1 class="title-1">Présentez nous votre <span class="text-mtom-orange">besoin</span></h1>
            <div class="mt-5">
{{--                <h5>--}}
{{--                    Création de site web, reseaux sociaux, publicité, SEO--}}
{{--                </h5>--}}
                <h3 class="font-bold">
                    Nous sommes là pour vous accompagner dans votre développement numérique
                </h3>
            </div>
        </div>

        <div class="mt-20">
            <div class="shadow-lg border-4 border-gray-50 rounded-2xl p-5 md:p-20" style="max-width: 1000px; margin: auto">
                <form action="{{ route('form.presentation-projet') }}" method="post" class="presentation-projet">
                    @csrf
                    @method('POST')

                    <div class="md:flex md:space-x-6 space-y-6 md:space-y-0">
                        <div>
                            <label class="custom-label" for="nom">Nom</label>
                            <input type="text" name="nom" class="custom-input mt-2" value="{{ old('nom') }}">
                            @error('nom')
                                <span class="form-error-span">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="custom-label" for="telephone">Téléphone</label>
                            <input type="tel" name="telephone" class="custom-input mt-2" value="{{ old('telephone') }}">
                            @error('telephone')
                                <span class="form-error-span">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="custom-label" for="courriel">Courriel</label>
                            <input type="email" name="courriel" class="custom-input mt-2" value="{{ old('courriel') }}">
                            @error('courriel')
                                <span class="form-error-span">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:space-x-6 space-y-6 md:space-y-0 mt-6">
                        <div class="w-full">
                            <label class="custom-label" for="type">Vous êtes</label>
                            <select name="type" class="custom-input mt-2 bg-white">
                                <option value="Une entreprise">Une entreprise</option>
                                <option value="Une travailleur autonome">Une travailleur autonome</option>
                                <option value="Un particulier">Un particulier</option>
                                <option value="OBNL / COOP">Une OBNL / COOP</option>
                            </select>
                            @error('type')
                                <span class="form-error-span">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="custom-label" for="demande_concerne">Votre demande concerne</label>
                            <select name="demande_concerne" class="custom-input mt-2 bg-white">
                                <option value="Site web vitrine">Site web vitrine</option>
                                <option value="Site web marchand">Site web marchand</option>
                                <option value="Formations en ligne">Formations en ligne</option>
                                <option value="Réseaux sociaux">Réseaux sociaux</option>
                                <option value="Publicié ciblée">Publicié ciblée</option>
                                <option value="Google Ads">Google Ads</option>
                                <option value="Optimisation SEO">Optimisation SEO</option>
                                <option value="Maintenance de site">Maintenance de site</option>
                            </select>
                            @error('demande_concerne')
                                <span class="form-error-span">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="custom-label" for="message">Présentez nous votre projet</label>
                        <textarea name="message" rows="5" class="custom-input mt-2">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="form-error-span">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="px-6 py-1 bg-mtom-orange rounded-full font-bold mt-6">Envoyer votre demande</button>
                </form>
            </div>
        </div>
    </div>

</x-layouts.front-layout>
