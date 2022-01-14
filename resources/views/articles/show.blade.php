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

            <h6 class="mt-8 font-bold text-xs border-b border-gray-100 pb-4">Publié le {{ $article->date_publication }}</h6>
            <div class="mt-16 article-content leading-normal text-lg+">{!! $article->contenu !!}</div>
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

            <a href="{{ route('blogue') }}"
               class="mt-20 flex items-center justify-center space-x-4 px-5 py-2 bg-gray-100 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>
                <h4 class="font-title text-sm font-bold">Tous nos articles</h4>
            </a>

        </div>
    </div>

</x-layouts.front-layout>
