<?php

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


Route::prefix('{locale?}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setlocale')->group(function () {
    Route::get('/', [SiteController::class, 'home'])->name('home');
    // Route::get('/rent', [SiteController::class, 'propertyList'])->name('rent.property.listing');
    // Route::get('/land', [SiteController::class, 'propertyList'])->name('land.property.listing');
    Route::get('admin/register', [SiteController::class, 'register'])->name('user.register');
});

Route::get('/sales', [SiteController::class, 'propertyList'])->name('sales.property.listing');

Route::get('/link', function () {
    Artisan::call('storage:link');
});

Route::get('/cls', function () {
    Artisan::call('optimize:clear');
});
