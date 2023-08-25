<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Filament\Notifications\Livewire\DatabaseNotifications;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
