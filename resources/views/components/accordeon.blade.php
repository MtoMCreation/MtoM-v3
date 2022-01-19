<div x-data="{ open: false }">
    <div @click="open = !open"
         :class="open ? 'bg-gray-200' : 'bg-gray-50'"
         class="flex justify-between px-4 py-4 rounded hover:bg-mtom-orange transition cursor-pointer hover:shadow">
        <h5 class="font-bold">
            {{ $titre ?? 'titre' }}
        </h5>
        <div>
            <svg :class="open ? 'hidden' : ''" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <svg :class="open ? '' : 'hidden'" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
    </div>

    <div class="mt-3"
         x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="transform opacity-0 scale-25"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-25">
        <p>
            {{ $message ?? 'message' }}
        </p>
    </div>

</div>
