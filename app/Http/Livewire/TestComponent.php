<?php

namespace App\Http\Livewire;

use App\Models\Projet;
use Livewire\Component;

class TestComponent extends Component
{

    public $projet;

    public function mount(Projet $projet)
    {
        $this->projet = $projet;
    }

    public function submit()
    {

    }

    public function render()
    {
        return view('livewire.test-component');
    }
}
