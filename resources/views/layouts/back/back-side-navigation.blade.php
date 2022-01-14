<div class="">

    <ul class="back-navigation mt-10 flex-col space-y-6 font-title font-bold uppercase">
        <li class="">
            <a href="{{ route('dashboard') }}"
               class="flex items-center space-x-4 px-4 py-2 rounded bg-gray-700 hover:bg-gray-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('dashboard.projets') }}"
               class="flex items-center space-x-4 px-4 py-2 rounded bg-gray-700 hover:bg-gray-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <span>Projets</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('dashboard.articles') }}"
               class="flex items-center space-x-4 px-4 py-2 rounded bg-gray-700 hover:bg-gray-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                <span>Articles</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('dashboard.medias') }}"
               class="flex items-center space-x-4 px-4 py-2 rounded bg-gray-700 hover:bg-gray-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span>Médias</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('dashboard.utilisateurs') }}"
               class="flex items-center space-x-4 px-4 py-2 rounded bg-gray-700 hover:bg-gray-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span>Utilisateurs</span>
            </a>
        </li>
    </ul>
</div>

<div class="flex flex-col space-y-3">

    <a href="{{ route('dashboard.mon-compte') }}"
       class="flex items-center space-x-4 px-4 py-3 rounded bg-gray-700 hover:bg-gray-800 transition font-title font-bold uppercase text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
        </svg>
        <span>Mon Compte</span>
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
           this.closest('form').submit();"
           class="px-4 py-1 mb-8 bg-red-500 hover:bg-red-700 transition flex items-center space-x-2 text-white w-full rounded uppercase font-bold font-title text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            <span>Se Déconnecter</span>
        </a>
    </form>

    <a href="{{ route('accueil') }}" class="px-4 py-4 bg-mtom-orange flex items-center space-x-2 text-mtom-blue w-full rounded uppercase font-bold font-title text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <span>Retour au site</span>
    </a>
</div>
