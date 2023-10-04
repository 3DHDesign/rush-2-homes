<?php

namespace App\Providers;

use App\Models\GeneralDetails;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class FooterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('frontend.components.footer', function ($view) {
            $currentLocale = app()->getLocale();
            $details = GeneralDetails::find(1)->select([
                $currentLocale . '_address_lk as address_lk',
                $currentLocale . '_address_uae as address_uae',
                $currentLocale . '_short_about as short_about',
            ])->first();
            $view->with('details', $details);
        });
    }
}
