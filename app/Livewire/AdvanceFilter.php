<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use App\Models\City;
use App\Models\District;
use App\Models\PropertyCategory;
use App\Models\PropertyInformation;
use Illuminate\Http\Request;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AdvanceFilter extends Component
{
    public $current_locale;

    #[Url]
    public $keyword;

    #[Rule('string')]
    public $propertyCategory;

    #[Rule('string')]
    public $district;

    public $getDistrict;

    public $cities = [];

    #[Rule('string')]
    public $city;

    #[Rule('integer')]
    #[Url]
    public $minPrice;

    #[Rule('integer')]
    #[Url]
    public $maxPrice;

    public $properties;

    public function mount(Request $request)
    {
        $this->keyword = $request->keyword;
        $this->propertyCategory = $request->propertyCategory;
        $this->district = $request->district;
        $this->city = $request->city;
        $this->minPrice = $request->minPrice;
        $this->maxPrice = $request->maxPrice;

        // Set properties
        $this->properties = PropertyInformation::all();
    }

    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }

    public function updatedGetDistrict($value)
    {
        $this->cities[] = null;
        $this->cities = City::where('district_id', $value)->select(
            'id',
            'name_' . $this->current_locale . ' as name',
        )->get();
        $this->dispatch('urlChanged', http_build_query(['city' => 'done']));
    }


    public function render()
    {
        return view('livewire.advance-filter', [
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
