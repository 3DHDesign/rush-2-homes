<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\District;
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

        $this->cities = City::all();
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
            // Handle the case where no city is selected (optional).
            $this->cityName = null;
        }
    }

    public function render()
    {
        return view('livewire.property-advance-filter', [
            'districts' => District::select('id', 'name_' . $this->current_locale . ' as name')->get(),
        ]);
    }
}
