<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Projet;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function index(Article $articles, Projet $projets)
    {
        $date = Carbon::now();
        return response()->view('sitemap', [
            'articles' => $articles->articlesPublie()->get(),
            'projets' => $projets->projetsPublie()->get(),
            'date' => $date,
        ])->header('Content-Type', 'text/xml');
    }
}
