<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function register()
    {
        return view('components.layouts.register');
    }
}
