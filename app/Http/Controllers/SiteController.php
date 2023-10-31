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
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Home');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Home');
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
        )->with('propertyCategory')
            ->orderByRaw('JSON_UNQUOTE(JSON_EXTRACT(label, "$[0]")) DESC')
            ->take(6)->get();

        $local = app()->getLocale();
        return view('frontend.pages.home', compact('featureProperties', 'local'));
    }

    public function register()
    {
        SEOMeta::setTitle('Register');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Register');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Register');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Register');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        return view('frontend.pages.register');
    }

    public function loginAccount()
    {
        SEOMeta::setTitle('Login');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Login');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Login');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Login');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        return view('frontend.pages.login_client');
    }

    public function about()
    {
        SEOMeta::setTitle('About us');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('About us');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('About us');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('About us');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));


        return view('frontend.pages.about');
    }

    public function privacyPolicy()
    {
        SEOMeta::setTitle('Privacy Policy');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Privacy Policy');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Privacy Policy');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Privacy Policy ');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        return view('frontend.pages.privacy_policy');
    }

    public function terms()
    {
        SEOMeta::setTitle('Terms and Conditions');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Terms and Conditions');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Terms and Conditions');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Terms and Conditions');
        JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        return view('frontend.pages.terms');
    }

    public function contact()
    {
        SEOMeta::setTitle('Contact us');
        SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
        OpenGraph::setTitle('Contact us');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

        TwitterCard::setTitle('Contact us');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle('Contact us');
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
