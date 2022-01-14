<div>
    <a href="{{ route('projet.show', $projet) }}"
       class="article-box relative flex flex-col justify-between md:transform hover:-translate-y-2 transition duration-500 ease-in-out">
        <div class="article-box-content">
            <img src="{{ asset($projet->image) }}" class="rounded" alt="image projet-{{ Str::slug($projet->client) }}-{{ config('app.tagline') }}">
            <div class="flex items-end justify-between mt-4">
                <h3 class="font-bold font-title text-xl max-w-[325px]">{{ $projet->client }}</h3>
            </div>
        </div>
    </a>
</div>


<x-slot name="custom_css">
    <style>
    </style>
</x-slot>
