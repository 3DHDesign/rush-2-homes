<?php

namespace App\Http\Controllers;

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
            'garages'
        )->with('propertyCategory')->first();
        return view('frontend.pages.propertyInner', compact('property'));
    }
}
