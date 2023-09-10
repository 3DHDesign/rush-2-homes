<?php

namespace App\Livewire;

use App\Models\Amenity;
use App\Models\City;
use App\Models\District;
use App\Models\PropertyCategory;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Url;
use Livewire\Component;

class PropertyAdvanceFilter extends Component
{
    public $current_locale;

    #[Url()]
    public $keyword;

    public $getDistrict;
    public $getCity;

    #[Url(as: 'district')]
    public $districName;

    #[Url(as: 'city')]
    public $cityName;

    public $cities = [];

    public $getCategory;

    #[Url(as: 'propertyCategory')]
    public $categoryName;

    #[Url(as: 'minPrice')]
    public $getMinPrice;

    #[Url(as: 'maxPrice')]
    public $getMaxPrice;

    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }

    public function mount()
    {

        if($this->districName){
            $districtId = District::where('name_en', $this->districName)->select('id')->first();
            $this->getDistrict = $districtId->id;
        }

        if($this->cityName)
        {
            $cityId = City::where('name_en', $this->cityName)->select('id')->first();
            $this->getCity = $cityId->id;
        }

        if($this->categoryName)
        {
            $categoryId = PropertyCategory::where('en_name', $this->categoryName)->select('id')->first();
            $this->getCategory = $categoryId->id;
        }
        $this->cities = City::select('id','name_en', 'name_si', 'name_ta')->get();
    }

    public function submitForm()
    {

        $queryParams = [
            'keyword' => $this->keyword,
        ];

        if ($this->districName) {
            $queryParams['district'] = $this->districName;
        }

        if ($this->cityName) {
            $queryParams['city'] = $this->cityName;
        }
        
        if ($this->categoryName) {
            $queryParams['propertyCategory'] = $this->categoryName;
        }

        if ($this->getMinPrice) {
            $queryParams['minPrice'] = $this->getMinPrice;
        }

        if ($this->getMaxPrice) {
            $queryParams['maxPrice'] = $this->getMaxPrice;
        }

        return Redirect::route('sales.property.listing', $queryParams);
    }

    public function updatedGetDistrict($value)
    {
        if ($value) {
            $this->cities = City::where('district_id', $value)->select('id','name_en', 'name_si', 'name_ta')->get();

            // update district name
            $district = District::where('id', $value)->select('name_en')->first();
            if ($district) {
                $this->districName = $district->{'name_en'};
            }
        } else {
            $this->cities = [];
        }
    }

    public function updatedGetCity($value)
    {
        if ($value) {
            $city = City::where('id', $value)->select('name_en')->first();
            if ($city) {
                $this->cityName = $city->{'name_en'};
            }
        } else {
            $this->cityName = null;
        }
    }

    public function updatedGetCategory($value)
    {
        if($value)
        {
            $category = PropertyCategory::where('id', $value)->select('en_name')->first();
            if($category)
            {
                $this->categoryName = $category->en_name;
            }
        }
    }

    public function resetForm()
    {
        $this->reset(); 
    }

    public function render()
    {
        return view('livewire.property-advance-filter', [
            'districts' => District::select('id', 'name_' . $this->current_locale . ' as name')->get(),
            'categoties' => PropertyCategory::select('id', $this->current_locale.'_name as name')->get(),
        ]);
    }
}
