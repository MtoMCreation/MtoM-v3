<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Media;
use App\Models\Projet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function dashboard()
    {
        return view('back.dashboard', [
            'articles' => Article::all(),
            'projets' => Projet::all(),
        ]);
    }

    public function articles()
    {
        return view('back.articles', [
            'articles' => Article::with('etat')->get()->sortByDesc('date_publication_order'),
        ]);
    }

    public function projets()
    {
        return view('back.projets', [
            'projets' => Projet::with(['etat', 'categories'])->get()->sortByDesc('date_publication_order'),
        ]);
    }

    public function medias()
    {
        return view('back.medias', [
            'medias' => Media::all()->sortByDesc('created_at'),
        ]);
    }

    public function utilisateurs()
    {
        return view('back.utilisateurs');
    }

    public function monCompte()
    {
        return view('back.mon-compte');
    }

}
