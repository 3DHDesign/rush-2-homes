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

    public $district; // district array

    #[Url(as: 'district')]
    public $getDistrict; //id value
    public $getDistrictId; //string value

    public $cities = []; // array array

    #[Url(as: 'city')]
    public $getCity; //id value
    public $getCityId; //string value

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
        $this->getDistrictId = District::where('name_' . $this->current_locale, $value)->select('id')->first();

        $this->cities = City::where('district_id', $this->getDistrictId->id)->select(
            'id',
            'name_' . $this->current_locale . ' as name',
        )->get();
    }

    public function mount(Request $request)
    {

        // $this->keyword = $request->keyword ?? '';
        // $this->propertyCategory = $request->propertyCategory ?? '';
        // $this->district = $request->district ?? '';
        // $this->city = $request->city ?? '';
        // $this->minPrice = $request->minPrice ?? '';
        // $this->maxPrice = $request->maxPrice ?? '';
        // $this->propertyType = $request->propertyType ?? '';

        $this->propertyTypeId = PropertyType::where('en_name', $this->propertyType)->select('id')->first();

        $this->properties = PropertyInformation::where('property_type_id', $this->propertyTypeId->id ?? 1)->where('status', 'Published')->with('propertyCategory')->get();
        $this->local = $this->current_locale;
    }

    public function filterProperties()
    {

        // Set cities array
        if ($this->getDistrict) {
            $this->cities = City::where('district_id', $this->getDistrict)->select(
                'id',
                'name_' . $this->current_locale . ' as name',
            )->get();
        }

        $this->getDistrictId = District::where('name_' . $this->current_locale, $this->getDistrict)->select('id')->first();
        $this->getCityId = City::where('name_' . $this->current_locale, $this->getCity)->select('id')->first();


        $query = PropertyInformation::where('property_type_id', $this->propertyTypeId->id ?? 1)->where('status', 'Published')->with('propertyCategory');

        if ($this->keyword) {
            $query->where(function ($q) {
                $q->where($this->current_locale . '_title', 'like', '%' . $this->keyword . '%')
                    ->orWhere($this->current_locale . '_address', 'like', '%' . $this->keyword . '%');
            });
        }

        if ($this->getDistrictId->id) {
            $query->where('district_id', $this->getDistrictId->id);
            if ($this->getCityId->id) {
                $query->where('city_id', $this->getCityId->id);
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
        ]);
    }
}
