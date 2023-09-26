<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\Amenity;
use App\Models\City;
use App\Models\District;
use App\Models\GeneralDetails;
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
            'id',
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

        $details = GeneralDetails::find(1)->select([
            $this->current_locale . '_address_lk as address_lk',
            $this->current_locale . '_address_uae as address_uae',
            $this->current_locale . '_short_about as short_about',
        ])
            ->first();

        return view('frontend.pages.home', compact('featureProperties', 'local', 'details'));
    }

    public function register()
    {
        $details = GeneralDetails::find(1)->select([
            $this->current_locale . '_address_lk as address_lk',
            $this->current_locale . '_address_uae as address_uae',
            $this->current_locale . '_short_about as short_about',
        ])
            ->first();

        return view('frontend.pages.register', compact('details'));
    }

    public function loginAccount()
    {
        $details = GeneralDetails::find(1)->select([
            $this->current_locale . '_address_lk as address_lk',
            $this->current_locale . '_address_uae as address_uae',
            $this->current_locale . '_short_about as short_about',
        ])
            ->first();

        return view('frontend.pages.login_client', compact('details'));
    }

    public function about()
    {
        $details = GeneralDetails::find(1)->select([
            $this->current_locale . '_address_lk as address_lk',
            $this->current_locale . '_address_uae as address_uae',
            $this->current_locale . '_short_about as short_about',
        ])
            ->first();

        return view('frontend.pages.about', compact('details'));
    }

    public function contact()
    {
        $details = GeneralDetails::find(1)->select([
            $this->current_locale . '_address_lk as address_lk',
            $this->current_locale . '_address_uae as address_uae',
            'contact_number_lk',
            'contact_number_uae',
            'email_uae',
            'email_lk',
            $this->current_locale . '_short_about as short_about',
            'maintain_mode'
        ])
            ->first();

        return view('frontend.pages.contact', compact('details'));
    }
}
