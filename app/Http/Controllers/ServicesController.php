<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function services()
    {
        return view('pages.services.tous');
    }

    public function siteWeb()
    {
        return view('pages.services.site-web');
    }

    public function siteVitrine(Projet $projets)
    {
        return view('pages.services.site-vitrine', [
            'projets' => $projets->sitesVitrines()->get()->random(3),
        ]);
    }

    public function siteMarchand(Projet $projets)
    {
        return view('pages.services.site-marchand', [
            'projets' => $projets->sitesMarchands()->get()->random(3),
        ]);
    }

    public function siteOnePage(Projet $projets)
    {
        return view('pages.services.site-one-page', [
            'projets' => $projets->sitesOnePage()->get()->random(3),
        ]);
    }

    public function formations()
    {
        return view('pages.services.formations');
    }

    public function marketingDigital()
    {
        return view('pages.services.marketing-digital');
    }

    public function reseauxSociaux()
    {
        return view('pages.services.reseaux-sociaux');
    }

    public function publiciteCiblee()
    {
        return view('pages.services.publicite-ciblee');
    }

    public function referencementPayant()
    {
        return view('pages.services.referencement-payant');
    }

    public function audit()
    {
        return view('pages.services.audit');
    }

    public function optimisationSeo()
    {
        return view('pages.services.optimisation-seo');
    }

    public function maintenance()
    {
        return view('pages.services.maintenance');
    }

}
