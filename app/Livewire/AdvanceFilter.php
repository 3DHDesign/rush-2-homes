<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use App\Models\City;
use App\Models\District;
use App\Models\PropertyCategory;
use App\Models\PropertyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AdvanceFilter extends Component
{
    public $current_locale;
    public $properties;


    #[Url]
    public $keyword;

    #[Rule('string')]
    public $propertyCategory;

    #[Url]
    public $propertyType;

    #[Rule('string')]
    public $district;

    #[Url]
    public $getDistrict;

    public $cities = [];

    #[Url]
    public $city;

    #[Rule('integer')]
    #[Url]
    public $minPrice;

    #[Rule('integer')]
    #[Url]
    public $maxPrice;

    public $local;




    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }



    public function mount(Request $request)
    {

        $this->keyword = $request->keyword ?? '';
        $this->propertyCategory = $request->propertyCategory ?? '';
        $this->district = $request->district ?? '';
        $this->city = $request->city ?? '';
        $this->minPrice = $request->minPrice ?? '';
        $this->maxPrice = $request->maxPrice ?? '';
        $this->propertyType = $request->propertyType ?? '';

        $this->properties = PropertyInformation::where('property_type_id', 1)->where('status', 'Published')->with('propertyCategory')->get();
        $this->local = $this->current_locale;
    }

    public function filterProperties()
    {
        $query = PropertyInformation::where('property_type_id', 1)->where('status', 'Published')->with('propertyCategory');

        if ($this->keyword) {
            $query->where(function ($q) {
                $q->where($this->current_locale . '_title', 'like', '%' . $this->keyword . '%')
                    ->orWhere($this->current_locale . '_address', 'like', '%' . $this->keyword . '%');
            });
        }

        if ($this->getDistrict) {
            $query->where('district_id', $this->getDistrict);
            if ($this->city) {
                $query->where('city_id', $this->city);
            }
        }

        if ($this->propertyCategory) {
            $query->where('property_category_id', $this->propertyCategory);
        }
        $this->properties = $query->get();
    }

    public function updated()
    {
        // $this->filterProperties();
    }

    public function updatedGetDistrict($value)
    {
        $this->cities[] = null;
        $this->cities = City::where('district_id', $value)->select(
            'id',
            'name_' . $this->current_locale . ' as name',
        )->get();
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
            'properties' => $this->properties,
            'cities' => $this->cities,
        ]);
    }
}
