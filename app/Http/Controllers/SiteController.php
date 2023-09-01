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
        // dd($this->current_locale);
    }

    public function home()
    {
        // $featureProperties = PropertyInformation::where('status', 1)->orWhere('label', 'featured')->select(
        //     $this->current_locale . '_title as title',
        //     $this->current_locale . '_address as address',
        // )->get();

        return view('frontend.pages.home');
    }

    public function register()
    {
        return view('components.layouts.register');
    }
}
