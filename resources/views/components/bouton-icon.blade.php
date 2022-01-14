@props(['lien'])


<a href="{{$lien}}" class="button mt-5 inline-flex items-center px-8 py-3 bg-gradient-to-r from-mtom-orange to-mtom-orange/90 text-sm font-title text-mtom-blue font-bold uppercase rounded-full hover:shadow-md hover:shadow-mtom-orange/60 transition duration-300 hover:scale-[1.03]">
    <span class="">{{ $slot }}</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="animate-pulse h-5 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
    </svg>
</a>
