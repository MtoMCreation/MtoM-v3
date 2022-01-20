<?php

namespace App\Http\Livewire\Pages;

use App\Models\Projet;
use Livewire\Component;

class Projets extends Component
{
    public $search;

    public function render(Projet $projets)
    {
        return view('livewire.pages.projets', [
            'projets' => $projets->projetsPublie()
                ->where('client', 'like', '%'.$this->search.'%')
                ->orderBy('site_reference', 'desc')
                ->orderBy('date_publication_order', 'desc')
                ->get(),
        ]);
    }
}
