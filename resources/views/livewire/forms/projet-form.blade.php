<div>
    <div class="w-full">
        <label for="meta_description" class="block font-bold text-base mb-1">Méta description</label>
        <textarea wire:model="meta_description" id="meta_description" rows="2" class="p-2 mt-1 rounded w-full focus:outline-none border-b-2 focus:border-mtom-orange focus:border-b-2"></textarea>
        @error('meta_description')
        <div class="text-base font-bold text-red-500">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
