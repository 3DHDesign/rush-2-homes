<?php

namespace App\Livewire;

use Livewire\Component;

class PropertyList extends Component
{
    public $properties;
    public $local;

    public function render()
    {
        return view('livewire.property-list');
    }
}
