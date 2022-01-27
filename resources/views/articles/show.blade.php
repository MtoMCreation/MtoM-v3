<x-layouts.front-layout>

@section('title'){{ $article->meta_titre }}
@endsection

@section('meta-description'){{ $article->meta_description }}
@endsection

@section('og-meta-image'){{ asset($article->image) }}
@endsection

    <div style="background-image: url({{ asset($article->image) }}); background-position: center; background-size: cover;background-repeat: no-repeat; background-attachment: fixed;" class="hidden md:block h-[65vh]">
    </div>

    <div class="md:hidden">
        <img src="{{ asset($article->image) }}" class="w-full" alt="">
    </div>

    <div class="py-20 container bg-white lg:border-t-4 lg:border-mtom-blue lg:rounded-md lg:-mt-20 max-w-[1000px]">

        <div class="lg:px-10 lg:border-l border-gray-100">
            <h1 class="text-5xl font-title font-title font-bold leading-title-1 before:absolute before ">
                {{ $article->titre }}
            </h1>

            @auth()
                <a href="{{ route('article.edit', $article) }}"
                   target="_blank"
                   class="hidden lg:inline-flex fixed bottom-[50px] left-[50px] flex justify-between items-center space-x-3 bg-gray-100 hover:bg-gray-300 transition shadow-lg p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[20px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
            @endauth

            <div class="sm:flex items-center sm:space-x-10 space-y-3 sm:space-y-0 mt-8 font-bold text-xs border-b border-gray-100 pb-4 text-gray-500">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h6 class="">Publié le {{ $article->date_publication }}</h6>
                </div>
                @if($article->temps_lecture)
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h6 class="">Temps de lecture : {{ $article->temps_lecture }} minute{{ $article->temps_lecture < 2 ? '' : 's' }}</h6>
                    </div>
                @endif


            </div>

            <div class="mt-16 article-content leading-normal text-lg+ first-letter:text-4xl first-letter:font-bold">
                {!! $article->contenu !!}
            </div>
        </div>

        <div class="articles-similaires mt-10 border-t-2 border-gray-100">
            <h3 class="font-title text-3xl font-bold mt-10 mb-6">Articles similaires</h3>
            <div class="grid md:grid-cols-2 auto-rows-auto gap-10">
                @foreach($articles_similaires as $article)
                    <a href="{{ route('article.show', $article) }}"
                       class="article-box flex flex-col justify-between md:transform hover:-translate-y-2 transition duration-500 ease-in-out">
                        <div class="article-box-content">
                            <img src="{{ asset($article->image) }}" class="rounded"
                                 alt="image-article-{{ Str::slug($article->titre) }}-{{ config('app.tagline-slug') }}">
                            <h3 class="font-bold font-title text-xl mt-4">{{ $article->titre }}</h3>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-3 mt-3">
                            <p class="text-xs font-black">Publié le {{ $article->date_publication }}</p>
                            <p class="lire-article text-xs font-title font-bold uppercase">Lire l'article</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <a href="{{ route('articles') }}"
               class="mt-20 flex items-center justify-center space-x-4 px-5 py-2 bg-gray-100 hover:bg-gray-200 transition rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>
                <h4 class="font-title text-sm font-bold">Tous nos articles</h4>
            </a>

        </div>
    </div>

</x-layouts.front-layout>
