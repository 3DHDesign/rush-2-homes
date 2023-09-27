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

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

class SiteController extends Controller
{
    public $current_locale;

    public function __construct()
    {
        $this->current_locale = app()->getLocale();
    }

    public function home()
    {
        SEOMeta::setTitle('Home - Rush 2 Homes');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Home - Rush 2 Homes');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Home - Rush 2 Homes');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Home - Rush 2 Homes');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

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
        SEOMeta::setTitle('Register - Rush 2 Homes');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Register - Rush 2 Homes');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Register - Rush 2 Homes');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Register - Rush 2 Homes');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

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
        SEOMeta::setTitle('Login - Rush 2 Homes');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Login - Rush 2 Homes');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Login - Rush 2 Homes');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Login - Rush 2 Homes');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

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
        SEOMeta::setTitle('About us - Rush 2 Homes');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('About us - Rush 2 Homes');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('About us - Rush 2 Homes');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('About us - Rush 2 Homes');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        $details = GeneralDetails::find(1)->select([
            $this->current_locale . '_address_lk as address_lk',
            $this->current_locale . '_address_uae as address_uae',
            $this->current_locale . '_short_about as short_about',
        ])
            ->first();

        return view('frontend.pages.about', compact('details'));
    }

    public function privacyPolicy()
    {
        SEOMeta::setTitle('Privacy Policy - Rush 2 Homes');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Privacy Policy - Rush 2 Homes');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Privacy Policy - Rush 2 Homes');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Privacy Policy - Rush 2 Homes');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        $details = GeneralDetails::find(1)->select([
            $this->current_locale . '_address_lk as address_lk',
            $this->current_locale . '_address_uae as address_uae',
            $this->current_locale . '_short_about as short_about',
        ])
            ->first();

        return view('frontend.pages.privacy_policy', compact('details'));
    }

    public function terms()
    {
        SEOMeta::setTitle('Terms and Conditions - Rush 2 Homes');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Terms and Conditions - Rush 2 Homes');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Terms and Conditions - Rush 2 Homes');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Terms and Conditions - Rush 2 Homes');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        $details = GeneralDetails::find(1)->select([
            $this->current_locale . '_address_lk as address_lk',
            $this->current_locale . '_address_uae as address_uae',
            $this->current_locale . '_short_about as short_about',
        ])
            ->first();

        return view('frontend.pages.terms', compact('details'));
    }

    public function contact()
    {
        SEOMeta::setTitle('Contact us - Rush 2 Homes');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Contact us - Rush 2 Homes');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Contact us - Rush 2 Homes');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Contact us - Rush 2 Homes');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

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

    public function maintenanceMode()
    {
        $mode = GeneralDetails::find(1)->select('maintain_mode')->first();
        if ($mode->maintain_mode == 1) {
            return view('components.layouts.maintenanceMode');
        } else {
            return redirect()->route('home');
        }

        return view('components.layouts.maintenanceMode');
    }
}
