<?php

namespace App\Livewire;

use App\Models\PropertyInformation;
use Livewire\Component;
use Illuminate\Database\Query\Builder;

class SimilarListings extends Component
{
    public $current_locale;

    public $propertyType;
    public $propertyCategory;
    public $city_id;
    public $district_id;
    public $properties;




    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }

    public function mount()
    {
        $this->properties = PropertyInformation::where('status', 'Published')
            ->where(function ($query) {
                $query->where('property_type_id', $this->propertyType);
            })
            ->select([
                $this->current_locale . '_title as title',
                $this->current_locale . '_address as address',
                'price',
                'price_type',
                'land_size',
                'size_type',
                'bedrooms',
                'gallery',
                'property_category_id',
                'bathrooms',
                'label',
                'currency',
                'aminities',
                'slug',
                'agent_id',
            ])
            ->with(['propertyCategory', 'agent'])
            ->limit(6)
            ->get();
    }

    public function render()
    {
        return view('livewire.similar-listings', [
            'similar_properties' => $this->properties,
            'local' => $this->current_locale,
        ]);
    }
}
