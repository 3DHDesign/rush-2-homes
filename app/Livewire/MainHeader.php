<?php

namespace App\Livewire;

use App\Models\PropertyCategory;
use Livewire\Component;

class MainHeader extends Component
{
    public $current_locale;
    public $categories;


    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }
    public function mount()
    {
        $this->categories = PropertyCategory::select($this->current_locale . '_name as name', 'id', 'en_name')->get();
    }

    public function render()
    {
        return view('livewire.main-header', [
            'categories' => $this->categories,
        ]);
    }
}
