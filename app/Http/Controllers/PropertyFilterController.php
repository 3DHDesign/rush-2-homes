<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\GeneralDetails;
use App\Models\PropertyCategory;
use App\Models\PropertyInformation;
use App\Models\PropertyType;
use App\Models\SubPropertyCategory;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

class PropertyFilterController extends Controller
{
    public $current_locale;

    public function __construct()
    {
        $this->current_locale = app()->getLocale();
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
        $propertySubCategory = $request->input('propertySubCategory');

        $district_id = District::where('name_en', $district)->select('id')->first();
        $city_id = City::where('name_en', $city)->select('id')->first();
        $property_type_id = PropertyType::where('en_name', $propertyType)->select('id')->first();
        $property_category_id = PropertyCategory::where('en_name', $propertyCategory)->select('id')->first();
        $propertySubCategoryId = SubPropertyCategory::where('en_name', $propertySubCategory)->select('id')->first();

        $query = PropertyInformation::where('status', 'Published')->where('property_type_id', $property_type_id->id ?? 1)
            ->select([
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
                'currency',
                'aminities',
                'slug'
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

        if ($propertySubCategory) {
            $query->where('sub_property_category_id', $propertySubCategoryId->id);
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

        $properties = $query->paginate(10);

        $local = app()->getLocale();

        if ($property_type_id->id == 1) {
            // For Sale
            SEOMeta::setTitle('For sale - Rush 2 Homes');
            SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            SEOMeta::setCanonical(url()->full());

            OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            OpenGraph::setTitle('For sale  - Rush 2 Homes');
            OpenGraph::setUrl(url()->full());
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

            TwitterCard::setTitle('For sale  - Rush 2 Homes');
            TwitterCard::setSite('@rush2homes');

            JsonLd::setTitle('For sale  - Rush 2 Homes');
            JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));
        } elseif ($property_type_id->id == 2) {
            // For Rent
            SEOMeta::setTitle('For rent - Rush 2 Homes');
            SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            SEOMeta::setCanonical(url()->full());

            OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            OpenGraph::setTitle('For rent  - Rush 2 Homes');
            OpenGraph::setUrl(url()->full());
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

            TwitterCard::setTitle('For rent  - Rush 2 Homes');
            TwitterCard::setSite('@rush2homes');

            JsonLd::setTitle('For rent  - Rush 2 Homes');
            JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));
        } elseif ($property_type_id->id == 3) {
            // Land
            SEOMeta::setTitle('For land - Rush 2 Homes');
            SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            SEOMeta::setCanonical(url()->full());

            OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            OpenGraph::setTitle('For land  - Rush 2 Homes');
            OpenGraph::setUrl(url()->full());
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

            TwitterCard::setTitle('For land  - Rush 2 Homes');
            TwitterCard::setSite('@rush2homes');

            JsonLd::setTitle('For land  - Rush 2 Homes');
            JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));
        } else {
            SEOMeta::setTitle('For sale - Rush 2 Homes');
            SEOMeta::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            SEOMeta::setCanonical(url()->full());

            OpenGraph::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            OpenGraph::setTitle('For sale  - Rush 2 Homes');
            OpenGraph::setUrl(url()->full());
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addImage(asset('assets/img/rush2homes-white-logo.jpg'));

            TwitterCard::setTitle('For sale  - Rush 2 Homes');
            TwitterCard::setSite('@rush2homes');

            JsonLd::setTitle('For sale  - Rush 2 Homes');
            JsonLd::setDescription('Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.');
            JsonLd::addImage(asset('assets/img/rush2homes-white-logo.jpg'));
        }


        return view('frontend.pages.propertyListing', compact('properties', 'local'));
    }
}
