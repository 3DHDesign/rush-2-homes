<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\Amenity;
use App\Models\City;
use App\Models\District;
use App\Models\PropertyCategory;
use App\Models\PropertyInformation;
use App\Models\PropertyType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
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
            'label',
            'slug'
        )->with('propertyCategory')->take(6)->get();

        $local = app()->getLocale();

        return view('frontend.pages.home', compact('featureProperties', 'local'));
    }

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function registerAccount(UserRegisterRequest $request)
    {
        $validated = $request->validated();
        $registered = User::create($validated);

        if ($registered) {
            // login to filament
            return Redirect::to('/admin');
        } else {
            // has an error
            return redirect()->back();
        }
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
