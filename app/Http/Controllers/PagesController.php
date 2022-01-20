<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Projet;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{

    public function testPage()
    {
        return view('pages.test-page');
    }

    public function accueil(Projet $projets, Article $articles)
    {
        return view('pages.accueil', [
            'derniers_sites' => $projets->siteWeb()->get()->sortByDesc('site_reference')->sortByDesc('date_publication_order')->take(3),
            'projetsLG' => $projets->projetsPublie()->get()->sortByDesc('date_publication_order'),
            'articles' => $articles->articlesPublie()->get()->sortByDesc('date_publication_order')->take(3),
        ]);
    }


    public function projets()
    {
        return view('pages.projets');
    }


    public function blogue(Article $articles)
    {
        if ($articles->count() > 0) {
            $query = $articles->articlesPublie()->get()->sortByDesc('date_publication_order');
            return view('pages.blogue', [
                'premier_article' => $query->first(),
                'articles' => $query->except($query->first()->id),
            ]);
        }
        return view('pages.blogue', [
            'articles' => $articles,
        ]);

    }


    public function apropos()
    {
        return view('pages.apropos');
    }


    public function contact()
    {
        return view('pages.contact');
    }

    public function presenterProjet()
    {
        return view('pages.presenter-projet');
    }


}
