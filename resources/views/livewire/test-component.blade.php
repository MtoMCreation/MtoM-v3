<div>
    salut

    <form action="">

        <div class="">
            <div class="w-full">
                <label for="client" class="block font-bold text-base mb-1">Titre / Client</label>
                <input type="text" name="client" id="client"
                       class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"
                       value="{{ isset($projet->client) ? $projet->client : '' }}">
                <span>{{ \Illuminate\Support\Str::length($projet->client) }}</span>
                @error('client')
                <div class="text-base font-bold text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

    </form>


</div>
