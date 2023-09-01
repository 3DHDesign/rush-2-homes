<?php

namespace App\Http\Controllers;

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
            'label'
        )->with('propertyCategory')->take(6)->get();

        $local = app()->getLocale();

        return view('frontend.pages.home', compact('featureProperties', 'local'));
    }

    public function register()
    {
        return view('components.layouts.register');
    }
}
