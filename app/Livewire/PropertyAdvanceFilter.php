<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Url;
use Livewire\Component;

class PropertyAdvanceFilter extends Component
{
    #[Url()]
    public $keyword;

    public function submitForm()
    {
        $queryParams = [
            'keyword' => $this->keyword,
        ];

        return Redirect::route('sales.property.listing', $queryParams);
    }

    public function render()
    {
        return view('livewire.property-advance-filter');
    }
}
