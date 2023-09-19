<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Favorites extends Component
{
    public $fav;

    public function render()
    {
        return view('livewire.dashboard.favorites');
    }
}
