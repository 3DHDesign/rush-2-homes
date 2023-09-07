<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\PropertyInformation;
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

        $district_id = District::where('name_' . $this->current_locale, $district)->select('id')->first();
        $city_id = City::where('name_' . $this->current_locale, $city)->select('id')->first();


        $query = PropertyInformation::where('status', 'Published')
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

        // if ($propertyType) {
        //     $query->where('property_type_id', $propertyType);
        // }

        if ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where($this->current_locale . '_title', 'like', '%' . $keyword . '%')
                    ->orWhere($this->current_locale . '_address', 'like', '%' . $keyword . '%');
            });
        }

        // if ($propertyCategory) {
        //     $query->where('property_category_id', $propertyCategory);
        // }

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

        $properties = $query->get();

        dd($query);

        $local = app()->getLocale();

        return view('frontend.pages.propertyListing', compact('properties', 'local'));
    }
}
