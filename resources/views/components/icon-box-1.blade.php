<div class="flex justify-start items-start space-x-6 p-5 rounded-lg bg-mtom-blue/90 hover:bg-mtom-blue/50 text-white border-4 border-white/10 hover:border-white/20 transition duration-300">
    <div class="hidden md:inline-flex text-mtom-orange">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $path }}" />
        </svg>
    </div>
    <div>
        <h4 class="font-title font-bold text-xl">{{ $titre }}</h4>
        <p class="mt-2 text-gray-200">
            {{ $slot }}
        </p>
    </div>
</div>
