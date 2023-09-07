<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\District;
use Livewire\Component;

class LocationSelector extends Component
{
    public $current_locale;

    public $districtInput;
    public $cityInput;

    public $cities = []; // updating city array


    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }

    public function mount()
    {

        if ($this->districtInput) {
            return $this->cities = City::where('district_id', $this->districtInput)->select(
                'id',
                'name_' . $this->current_locale . ' as name',
            )->get();
        } else {
            return $this->cities = [];
        }
    }


    public function render()
    {
        return view('livewire.location-selector', [
            'districts' => District::select('id', 'name_' . $this->current_locale . ' as name')->get(),
            'cities' => $this->cities,
        ]);
    }
}
