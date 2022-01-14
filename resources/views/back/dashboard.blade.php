<x-layouts.back-layout>

    <x-slot name="header">
        dashboard
    </x-slot>

    <div class="flex space-x-10 mt-10">

        <div class="w-full flex flex-col justify-around p-10 bg-gray-100 rounded">
            <div class="flex items-center  justify-between space-x-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                <div>
                    <h3 class="font-title font-bold text-3xl">{{ $articles->count() }} articles en ligne</h3>
                </div>
            </div>
            <div class="mt-5">
                <a href="{{ route('dashboard.articles') }}" class="block">Voir tous les articles</a>
            </div>
        </div>

        <div class="w-full flex flex-col justify-around p-10 bg-gray-100 rounded">
            <div class="flex items-center  justify-between space-x-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <div>
                    <h3 class="font-title text-xl">{{ $projets->count() }} projets en ligne</h3>
                </div>
            </div>
            <div class="mt-5">
                <a href="{{ route('dashboard.projets') }}" class="block">Voir tous les projets</a>
            </div>
        </div>

        <div class="w-full flex flex-col justify-around p-10 bg-gray-100 rounded">
            <div class="flex items-center  justify-between space-x-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <div>
                    <h3 class="font-title text-xl">{{ $projets->count() }} projets en ligne</h3>
                </div>
            </div>
            <div class="mt-5">
                <a href="{{ route('dashboard.projets') }}" class="block">Voir tous les projets</a>
            </div>
        </div>

    </div>

</x-layouts.back-layout>
