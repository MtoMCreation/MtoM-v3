<div class="flex bg-[#021223] px-14 py-4 rounded-lg text-white">
    <div class="w-full md:w-2/3 flex flex-col justify-center">
        <h4 class="font-title text-4xl mb-2">Envie de <span class="text-mtom-orange">booster</span> <br>votre <span class="underline">projet web</span> ?</h4>
        <div>
            <x-bouton-icon :lien="route('contact')">Contactez-nous</x-bouton-icon>
        </div>
    </div>
    <div class="hidden md:inline-flex w-1/3">
        <img src="{{ asset('storage/img/visuels/to-the-stars-2.gif') }}" class="rounded" alt="image projet-gorczany-llc-MtoM Création - Création de site web et stratégies numerique à Montréal">
    </div>
</div>
