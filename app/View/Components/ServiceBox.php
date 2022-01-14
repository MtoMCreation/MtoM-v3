<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceBox extends Component
{

    public $path;
    public $titre;
    public $lien;
    public $class;
    public $service;

    /**
     * Create a new component instance.
     *
     * @param string $path
     * @param string $titre
     * @param string $lien
     */
    public function __construct(
        $path = "M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z",
        $titre = "Service",
        $lien = "#",
        $service = "site_vitrine")
    {
        $this->path = $path;
        $this->titre = $titre;
        $this->lien = $lien;

        $this->service = $service;

        if ($this->service == 'site_vitrine') {
            $this->path = "M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z";
            $this->titre = 'Site web <br> vitrine';
            $this->lien = route('site-vitrine');
        }
        elseif ($this->service == 'site_marchand'){
            $this->path = 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z';
            $this->titre = 'Site web <br> marchand';
            $this->lien = route('site-marchand');
        }
        elseif ($this->service == 'site_one_page'){
            $this->path = 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z';
            $this->titre = 'Site web <br> one page';
            $this->lien = route('site-one-page');
        }
        elseif ($this->service == 'formation'){
            $this->path = 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z';
            $this->titre = 'Formations <br> web';
            $this->lien = route('formations');
        }
        elseif ($this->service == 'reseaux_sociaux'){
            $this->path = 'M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5';
            $this->titre = 'Réseaux <br> Sociaux';
            $this->lien = route('reseaux-sociaux');
        }
        elseif ($this->service == 'publicite_ciblee'){
            $this->path = 'M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z';
            $this->titre = 'Publicité <br> ciblée';
            $this->lien = route('publicite-ciblee');
        }
        elseif ($this->service == 'referencement_payant'){
            $this->path = 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z';
            $this->titre = 'Publicité <br> Google Ads';
            $this->lien = route('referencement-payant');
        }
        elseif ($this->service == 'audit'){
            $this->path = 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4';
            $this->titre = 'Audit et <br> recommandations';
            $this->lien = route('audit');
        }
        elseif ($this->service == 'optimisation_seo'){
            $this->path = 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4';
            $this->titre = 'Optimisation <br> SEO';
            $this->lien = route('optimisation-seo');
        }
        elseif ($this->service == 'maintenance'){
            $this->path = 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4';
            $this->titre = 'Maintenance de <br> site web';
            $this->lien = route('maintenance');
        }

    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service-box');
    }
}
