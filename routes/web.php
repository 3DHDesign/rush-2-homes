<?php

use App\Http\Controllers\FacebookAuthController;
use App\Http\Controllers\PropertyFilterController;
use App\Http\Controllers\PropertyInnerController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\UserDashboard\DashboardController;
use App\Livewire\AddFavorite;
use App\Livewire\LoginButtons;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware((['maintenance.mode']))->group(function () {
    Route::get('/', [SiteController::class, 'home'])->name('home');
    Route::get('/about', [SiteController::class, 'about'])->name('about');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::get('/sales', [PropertyFilterController::class, 'propertyList'])->name('sales.property.listing');
    Route::get('/rent', [PropertyFilterController::class, 'propertyList'])->name('rent.property.listing');
    Route::get('/land', [PropertyFilterController::class, 'propertyList'])->name('land.property.listing');
    Route::get('/properties/{slug}', [PropertyInnerController::class, 'propertyInner'])->name('property.inner');
    Route::get('user/register', [SiteController::class, 'register'])->name('user.register');
    Route::get('user/login', [SiteController::class, 'loginAccount'])->name('user.account.login');
    Route::get('/privacy-policy', [SiteController::class, 'privacyPolicy'])->name('privacy');
    Route::get('/terms-and-conditions', [SiteController::class, 'terms'])->name('terms');

    //Google login
    Route::get('auth/google', [GoogleAuthController::class, 'signInwithGoogle'])->name('auth.google.login');
    Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackToGoogle']);

    //Facebook login
    Route::get('auth/facebook', [FacebookAuthController::class,  'redirectToFacebook'])->name('auth.facebook.login');
    Route::get('auth/facebook/callback', [FacebookAuthController::class,  'handleFacebookCallback']);

    // Client dashboard routes
    Route::prefix('/user/dashboard')->middleware(['client.auth'])->group(function () {
        Route::get('home', [DashboardController::class, 'home'])->name('user.dashboard.home');
        Route::get('favorites', [DashboardController::class, 'favorites'])->name('user.dashboard.favorites');
    });

    Route::get('language/{locale}', function ($locale) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    })->name('lang');
});

Route::get('/maintenance-mode', [SiteController::class, 'maintenanceMode'])->name('maintenanceMode');


// Route::get('/link', function () {
//     Artisan::call('storage:link');
// });

// Route::get('/migrate', function () {
//     Artisan::call('migrate');
// });

// Route::get('/cls', function () {
//     Artisan::call('optimize:clear');
// });
