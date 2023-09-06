<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\District;
use App\Models\PropertyCategory;
use Livewire\Component;

class RentPropertyFilter extends Component
{
    public $current_locale;

    public $keyword;
    public $propertyCategorySet;
    public $getDistrict;
    public $cities = [];
    public $city;
    public $minPrice;
    public $maxPrice;
    public $search;

    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }

    public function updatedGetDistrict($value)
    {
        $this->cities = [];
        $this->cities = City::where('district_id', $value)->select(
            'id',
            'name_' . $this->current_locale . ' as name',
        )->get();
    }

    public function render()
    {
        return view('livewire.buy-property-filter', [
            'propertyCategory' => PropertyCategory::select(
                'id',
                $this->current_locale . '_name as name',
            )->get(),
            'districts' => District::select(
                'id',
                'name_' . $this->current_locale . ' as name',
            )->get(),
        ]);
    }
}
