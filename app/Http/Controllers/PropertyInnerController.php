<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\PropertyInformation;
use Illuminate\Http\Request;

class PropertyInnerController extends Controller
{
    public $current_locale;

    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }

    public function propertyInner($slug)
    {
        $property = PropertyInformation::where('slug', $slug)->select(
            $this->current_locale . '_title as title',
            $this->current_locale . '_address as address',
            $this->current_locale . '_description as description',
            'slug',
            'price',
            'price_type',
            'land_size',
            'size_type',
            'bedrooms',
            'gallery',
            'property_category_id',
            'bathrooms',
            'label',
            'gallery',
            'garages',
            'city_id',
            'district_id',
            'property_code',
            'currency',
            'floors',
            'aminities',
            'agent_id',
        )->with(['propertyCategory', 'city', 'district', 'agent'])->first();
        $local = $this->current_locale;

        // get Amenities from array
        $list_aminities = Amenity::whereIn('id', $property->aminities)->select(
            $this->current_locale . '_name as name',
        )->get();
        return view('frontend.pages.propertyInner', compact('property','local', 'list_aminities'));
    }
}
