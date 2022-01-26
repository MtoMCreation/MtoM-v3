<form method="post" action="{{ route('form.contact') }}"
      class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('POST')
    <div class="md:flex md:space-x-4">
        <div class="mb-4 w-full">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">
                Nom
            </label>
            <input class="custom-input" name="nom" id="nom" type="text" placeholder="Julien" value="{{ old('nom') }}">
            @error('nom')
            <span class="form-error-span">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4 w-full">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone">
                Téléphone
            </label>
            <input class="custom-input" name="telephone" id="telephone" type="text" placeholder="514..." value="{{ old('telephone') }}">
            @error('telephone')
            <span class="form-error-span">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
        </label>
        <input class="custom-input" name="email" id="email" type="email" placeholder="@" value="{{ old('email') }}">
        @error('email')
        <span class="form-error-span">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Message
        </label>
        <textarea name="message" id="message" cols="7" class="custom-input">{{ old('message') }}</textarea>
        @error('message')
        <span class="form-error-span">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-mtom-orange hover:bg-mtom-blue-2 transition text-mtom-blue hover:text-white font-bold px-6 py-1 rounded-full focus:outline-none focus:shadow-outline" type="submit">
            Envoyer
        </button>
    </div>
</form>
