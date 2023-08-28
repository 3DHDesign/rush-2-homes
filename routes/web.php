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

Route::get('/', function () {
    return view('components.layouts.master');
});

Route::get('admin/register', [SiteController::class, 'register'])->name('user.register');


Route::get('/link', function () {
    Artisan::call('storage:link');
});

Route::get('/cls', function () {
    Artisan::call('optimize:clear');
});
