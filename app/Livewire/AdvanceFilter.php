<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use App\Models\City;
use App\Models\District;
use App\Models\PropertyCategory;
use App\Models\PropertyInformation;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class AdvanceFilter extends Component
{
    public $current_locale;
    public $properties;

    #[Url]
    public $keyword; // string value

    public $propertyCategory;

    #[Url(as: 'propertyType')]
    public $propertyType = '';
    public $propertyTypeId;

    public $getDistrict; //id value

    #[Url(as: 'district')]
    public $getDistrictName; //id value

    public $getCity; // Selected city

    public $cities = []; // Array to store cities


    #[Rule('integer')]
    public $minPrice;

    #[Rule('integer')]
    public $maxPrice;

    public $local;

    use WithPagination;


    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }

    public function updatedGetDistrict($value)
    {
        // $districtName = District::where('id', $value)->select(['id', 'name_' . $this->current_locale . ' as name'])->first();
        // $this->getDistrictName = $districtName->name;
        // // Fetch the relevant cities based on the district
        // $this->cities = City::where('district_id', $value)->select(
        //     'id',
        //     'name_' . $this->current_locale . ' as name',
        // )->get();
    }

    public function mount(Request $request)
    {
    }

    public function filterProperties()
    {
        $query = PropertyInformation::where('property_type_id', $this->propertyTypeId->id ?? 1)->where('status', 'Published')->with('propertyCategory');

        if ($this->keyword) {
            $query->where(function ($q) {
                $q->where($this->current_locale . '_title', 'like', '%' . $this->keyword . '%')
                    ->orWhere($this->current_locale . '_address', 'like', '%' . $this->keyword . '%');
            });
        }

        if ($this->propertyCategory) {
            $query->where('property_category_id', $this->propertyCategory);
        }

        if ($this->minPrice) {
            $query->where('price', '>=', $this->minPrice);
        }

        if ($this->maxPrice) {
            $query->where('price', '<=', $this->maxPrice);
        }

        $this->properties = $query->get();
        // dd($this->getDistrict, $this->cities, $this->properties);
    }

    public function updated()
    {
        // $this->filterProperties();
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
            // 'properties' => $this->properties,
        ]);
    }
}
