<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Accordeon extends Component
{
    /**
     * @var string
     */
    public $titre;

    /**
     * @var string
     */
    public $message;

    /**
     * Create a new component instance.
     *
     * @param string $titre
     * @param string $message
     */
    public function __construct($titre = 'titre', $message = "message texte")
    {
        $this->titre = $titre;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.accordeon');
    }
}
