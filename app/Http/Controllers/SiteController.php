<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\PropertyCategory;
use App\Models\PropertyInformation;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public $current_locale;

    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }

    public function home()
    {
        $featureProperties = PropertyInformation::where('status', 'Published')->select(
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
            'label'
        )->with('propertyCategory')->take(6)->get();

        $local = app()->getLocale();

        return view('frontend.pages.home', compact('featureProperties', 'local'));
    }

    public function register()
    {
        return view('components.layouts.register');
    }

    public function propertyList(Request $request)
    {
        $keyword = $request->input('keyword');
        $propertyType = $request->input('propertyType');
        $propertyCategory = $request->input('propertyCategory');
        $district = $request->input('district');
        $city = $request->input('city');
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');

        $district_id = District::where('name_en', $district)->select('id')->first();
        $city_id = City::where('name_en', $city)->select('id')->first();
        $property_type_id = PropertyType::where('en_name', $propertyType)->select('id')->first();
        $property_category_id = PropertyCategory::where('en_name', $propertyCategory)->select('id')->first();

        $query = PropertyInformation::where('status', 'Published')->where('property_type_id', $property_type_id->id ?? 1)
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
            ])
            ->with('propertyCategory');

        if ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where($this->current_locale . '_title', 'like', '%' . $keyword . '%')
                    ->orWhere($this->current_locale . '_address', 'like', '%' . $keyword . '%');
            });
        }

        if ($propertyCategory) {
            $query->where('property_category_id', $property_category_id->id);
        }

        if ($district) {
            $query->where('district_id', $district_id->id);
        }

        if ($city) {
            $query->where('city_id', $city_id->id);
        }

        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        $properties = $query->paginate(4);

        // dd($query);

        $local = app()->getLocale();

        return view('frontend.pages.propertyListing', compact('properties', 'local'));
    }
}
