<div x-data="{ open: false }"
     class="flex justify-start items-start space-x-6 p-5 rounded-lg bg-mtom-blue/90 hover:bg-mtom-blue/50 text-white border-4 border-white/10 hover:border-white/20 transition duration-300">
    <div class="hidden md:inline-flex text-mtom-orange">
        <svg @click="open = !open"
             xmlns="http://www.w3.org/2000/svg" class="w-[30px] cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $path }}" />
        </svg>
    </div>
    <div>
        <h4 @click="open = !open"
            class="font-title font-bold text-xl cursor-pointer block"
            :class="open ? 'text-mtom-orange' : ''">
            {{ $titre }}</h4>
        <p x-show="open"
           x-transition:enter="transition ease-out duration-300"
           x-transition:enter-start="transform opacity-0 scale-25"
           x-transition:enter-end="transform opacity-100 scale-100"
           x-transition:leave="transition ease-in duration-75"
           x-transition:leave-start="transform opacity-100 scale-100"
           x-transition:leave-end="transform opacity-0 scale-25"
           class="mt-2 text-gray-200">
            {{ $slot }}
        </p>
    </div>
</div>
