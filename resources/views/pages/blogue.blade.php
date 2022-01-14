<x-layouts.front-layout>

@section('title')Nos articles de blog - MtoM Création, site web et stratégie digitale.
@endsection

@section('meta-description')Tout savoir sur la création de site web, le SEO, la stratégie numérique, le deisgn, les tendances numériques... Découvrez notre blogue spécialisé
@endsection

@section('og-meta-image'){{ asset('storage/img/building-websites.svg') }}
@endsection

<!------------------ Page content ------------------>

    <div>

        <!-- Hero page blogue -->
        <div class="container py-20" style="min-height: calc(100vh - 120px)">

{{--            @if($articles->count() > 0)--}}
                <div class="">
                    <div>
                        <a href="{{ route('article.show', $premier_article) }}"
                           class="first-article-box-content article-box flex space-x-12">
                            <div class="lg:w-1/2 flex flex-col justify-between">
                                <div>
                                    <h3 class="font-bold font-title text-4xl">{{ $premier_article->titre }}</h3>
                                    <p class="mt-2text-base mt-10">{{ $premier_article->description }}</p>
                                </div>
                                <div class="flex items-center justify-between border-t border-gray-50 pt-3 mt-8 lg:mt-20">
                                    <p class="text-xs font-black">Publié le {{ $premier_article->date_publication }}</p>
                                    <p class="lire-article text-xs font-title font-bold uppercase">Lire l'article</p>
                                </div>
                            </div>
                            <div class="hidden lg:w-1/2 lg:block rounded" style="background-image: url({{ $premier_article->image }}); background-position: center; background-size: cover;background-repeat: no-repeat;">
                            </div>
                        </a>
                    </div>
                    <div class="mt-20 grid md:grid-cols-2 xl:grid-cols-2 auto-rows-auto gap-20">

                            @foreach($articles as $article)
                                <a href="{{ route('article.show', $article) }}"
                                   class="article-box flex flex-col justify-between md:transform hover:-translate-y-2 transition duration-500 ease-in-out">
                                    <div class="article-box-content">
                                        <img src="{{ asset($article->image) }}" class="rounded" alt="image-article-{{ Str::slug($article->titre) }}-{{ config('app.tagline-slug') }}">
                                        <h3 class="font-bold font-title text-xl mt-4">{{ $article->titre }}</h3>
                                        <p class="mt-2 text-base">{{ Str::limit($article->description, 100) }}</p>
                                    </div>
                                    <div class="flex items-center justify-between border-t border-gray-100 pt-3 mt-3">
                                        <p class="text-xs font-black">Publié le {{ $article->date_publication }}</p>
                                        <p class="lire-article text-xs font-title font-bold uppercase">Lire l'article</p>
                                    </div>
                                </a>
                            @endforeach

                    </div>
                </div>
{{--            @else--}}
{{--                <h2>Site en maintenance, les articles ne sont pas disponible pour le moment</h2>--}}
{{--            @endif--}}

        </div>


    </div>

    <!------------------ CSS ------------------>
    <x-slot name="custom_css">
        <style>
            .lire-article{
                transition: 200ms;
            }
            .article-box:hover .lire-article{
                color: #e9c348;
            }
            .article-box img {
                transition: 200ms;
            }
            .article-box:hover img{
                filter: brightness(1.05);
            }
        </style>
    </x-slot>


</x-layouts.front-layout>


