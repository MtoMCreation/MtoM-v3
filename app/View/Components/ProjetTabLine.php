<?php

namespace App\View\Components;

use App\Models\Projet;
use Illuminate\View\Component;

class ProjetTabLine extends Component
{
    public $projet;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Projet $projet)
    {
        $this->projet = $projet;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.projet-tab-line');
    }
}
