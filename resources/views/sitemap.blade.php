<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" >

{{--    PAGES--}}
    <url>
        <loc>{{ route('accueil') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ route('projets') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('apropos') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ route('articles') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('presenter-projet') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ route('tous-les-services') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('site-web') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('site-vitrine') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ route('site-marchand') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('site-one-page') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('marketing-digital') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('formations') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('reseaux-sociaux') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('publicite-ciblee') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('referencement-payant') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('audit') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('optimisation-seo') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('maintenance') }}</loc>
        <lastmod>{{ $date }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

{{--    PROJETS--}}
    @foreach ($projets as $n => $projet)
        <url>
            <loc>{{ route('projet.show', $projet) }}</loc>
            <lastmod>{{ \Illuminate\Support\Carbon::today()->subWeek($n)->toDateString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

{{--    ARTICLES --}}
    @foreach ($articles as $n => $article)
        <url>
            <loc>{{ route('article.show', $article) }}</loc>
            <lastmod>{{ \Illuminate\Support\Carbon::today()->subWeek($n)->toDateString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
