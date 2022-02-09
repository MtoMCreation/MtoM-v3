<div>

{{--    <input wire:model="search" type="text" placeholder="Rechercher un projet" class="pb-2 border-b border-mtom-blue focus:outline-none">--}}

    <div class="mt-8 grid md:grid-cols-2 auto-rows-auto gap-10">
        @foreach($projets as $projet)
            <x-projet-box1 :projet="$projet"></x-projet-box1>
        @endforeach
    </div>

</div>
