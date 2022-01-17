<div>
    <a href="{{ route('projet.show', $projet) }}"
       class="article-box relative flex flex-col justify-between md:transform hover:-translate-y-2 transition duration-500 ease-in-out">
        <div class="article-box-content">
            @if($projet->description_prestation)
                <h4 class="description absolute top-3 right-3 text-sm bg-white/80 z-50 px-4 py-1 rounded-full font-bold">{{ $projet->description_prestation }}</h4>
            @endif
            <img src="{{ asset($projet->image) }}"  class="rounded"
                 alt="image projet-{{ Str::slug($projet->client) }}-{{ config('app.tagline') }}">
            <div class="flex items-end justify-between mt-4">
                <h3 class="font-bold font-title text-xl max-w-[325px]">{{ $projet->client }}</h3>
                <p class="lire-article text-xs font-title font-bold uppercase text-right inline-flex">Voir le projet</p>
            </div>
        </div>
    </a>
</div>


<x-slot name="custom_css">
    <style>
        .lire-article{
            transition: 200ms;
        }
        .article-box:hover .lire-article{
            color: #f2c933;
        }
        .article-box img {
            transition: 200ms;
        }
        .article-box:hover img{
            filter: brightness(1.05);
        }
        .description{
            transition: 200ms;
        }
        .article-box:hover .description{
            background: #f2c933;
            /*opacity: 80%;*/
        }
    </style>
</x-slot>
