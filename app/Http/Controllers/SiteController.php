<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function register()
    {
        return view('components.layouts.register');
    }
}
