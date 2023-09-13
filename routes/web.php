<?php

use App\Http\Controllers\PropertyFilterController;
use App\Http\Controllers\PropertyInnerController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/sales', [PropertyFilterController::class, 'propertyList'])->name('sales.property.listing');
Route::get('/rent', [PropertyFilterController::class, 'propertyList'])->name('rent.property.listing');
Route::get('/properties/{slug}', [PropertyInnerController::class, 'propertyInner'])->name('property.inner');
Route::get('admin/register', [SiteController::class, 'register'])->name('user.register');

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang');


Route::get('/link', function () {
    Artisan::call('storage:link');
});

Route::get('/cls', function () {
    Artisan::call('optimize:clear');
});
