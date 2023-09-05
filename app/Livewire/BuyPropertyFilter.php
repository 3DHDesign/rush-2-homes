<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\District;
use App\Models\PropertyCategory;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Rule;
use Livewire\Component;

class BuyPropertyFilter extends Component
{
    public $current_locale;

    #[Rule('string')]
    public $keyword;

    #[Rule('integer')]
    public $propertyCategorySet;

    public $getDistrict;

    public $cities = [];

    #[Rule('integer')]
    public $city;

    #[Rule('integer')]
    public $minPrice;

    #[Rule('integer')]
    public $maxPrice;

    public $search;


    // Quary Values

    #[Rule('string')]
    public $propertyCategoryName;

    #[Rule('string')]
    public $getDistrictName;

    #[Rule('string')]
    public $cityName;

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

    public function searchFilter()
    {
        $this->propertyCategoryName = PropertyCategory::where('id', $this->propertyCategorySet)->select($this->current_locale . '_name as name')->first();
        $this->getDistrictName = District::where('id', $this->getDistrict)->select('name_' . $this->current_locale . ' as name')->first();
        $this->cityName = City::where('id', $this->city)->select('name_' . $this->current_locale . ' as name')->first();

        $queryParams = [
            'propertyType' => 'sell',
            'keyword' => $this->keyword,
            'propertyCategory' => $this->propertyCategoryName->name ?? null,
            'district' => $this->getDistrictName->name ?? null,
            'city' => $this->cityName->name ?? null,
            'minPrice' => $this->minPrice,
            'maxPrice' => $this->maxPrice,
        ];

        return Redirect::route('sales.property.listing', $queryParams);
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
