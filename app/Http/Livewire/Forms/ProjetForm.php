<?php

namespace App\Http\Livewire\Forms;

use App\Models\Projet;
use Livewire\Component;

class ProjetForm extends Component
{
    public $projet;
    public $meta_description;

    public function mount(Projet $projet)
    {
        $projet = $this->projet;


    }

    public function render()
    {
        return view('livewire.forms.projet-form');
    }
}
