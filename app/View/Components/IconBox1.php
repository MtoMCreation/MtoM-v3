<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IconBox1 extends Component
{

    public $titre;
    public $path;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titre, $path = "M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z")
    {
        $this->titre = $titre;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icon-box-1');
    }
}
