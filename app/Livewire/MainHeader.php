<?php

namespace App\Livewire;

use App\Models\PropertyCategory;
use App\Models\SubPropertyCategory;
use Livewire\Component;

class MainHeader extends Component
{
    public $current_locale;
    public $categories;

    public $sale_categories;
    public $rent_categories;
    public $land_sub_categories;


    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }
    public function mount()
    {
        $this->categories = PropertyCategory::select($this->current_locale . '_name as name', 'id', 'en_name')->get();
        $this->land_sub_categories = SubPropertyCategory::select($this->current_locale . '_name as name', 'id', 'en_name')->get();

        $this->sale_categories = PropertyCategory::whereJsonContains('property_property_type_id', '1')->select($this->current_locale . '_name as name', 'id', 'en_name')->get();
        $this->rent_categories = PropertyCategory::whereJsonContains('property_property_type_id', '2')->select($this->current_locale . '_name as name', 'id', 'en_name')->get();
    }

    public function render()
    {
        return view('livewire.main-header', [
            'categories' => $this->categories,
            'sale_categories' => $this->sale_categories,
            'rent_categories' => $this->rent_categories,
            'land_sub_categories' => $this->land_sub_categories,
        ]);
    }
}
