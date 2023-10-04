<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\GeneralDetails;
use App\Models\PropertyInformation;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

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
            'id',
            $this->current_locale . '_title as title',
            $this->current_locale . '_address as address',
            $this->current_locale . '_description as description',
            'en_title',
            'property_type_id',
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
            'icon',
            $this->current_locale . '_name as name',
        )->get();

        SEOMeta::setTitle($property->en_title . ' - Rush 2 Homes');
        SEOMeta::setDescription($property->en_title . '. ' . 'Invest in Your Future Today.');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setDescription($property->en_title . '. ' . 'Invest in Your Future Today.');
        OpenGraph::setTitle($property->en_title . ' - Rush 2 Homes');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('storage/' . $property->gallery[0]));

        TwitterCard::setTitle($property->en_title . ' - Rush 2 Homes');
        TwitterCard::setSite('@rush2homes');

        JsonLd::setTitle($property->en_title . ' - Rush 2 Homes');
        JsonLd::setDescription($property->en_title . '. ' . 'Invest in Your Future Today.');
        JsonLd::addImage(asset('storage/' . $property->gallery[0]));

        return view('frontend.pages.propertyInner', compact('property', 'local', 'list_aminities'));
    }
}
