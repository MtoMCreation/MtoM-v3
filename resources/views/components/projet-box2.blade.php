<div>
    <a href="{{ route('projet.show', $projet) }}"
       class="article-box flex flex-col justify-between md:transform hover:-translate-y-2 transition duration-500 ease-in-out">
        <div class="article-box-content">
            <img src="{{ asset($projet->image) }}" class="rounded" alt="image projet-{{ Str::slug($projet->client) }}-{{ config('app.tagline') }}">
            <div class="flex items-center justify-between mt-4 text-white">
                <h3 class="font-bold font-title text-xl">{{ $projet->client }}</h3>
{{--                <p class="lire-article text-xs font-title font-bold uppercase">Voir le projet</p>--}}
            </div>
        </div>
    </a>
</div>
