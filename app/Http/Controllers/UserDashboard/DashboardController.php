<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('frontend.pages.dashboard.profile');
    }

    public function favorites()
    {
        return view('frontend.pages.dashboard.favorite');
    }
}
