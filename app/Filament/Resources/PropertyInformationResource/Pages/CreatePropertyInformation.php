<?php

namespace App\Filament\Resources\PropertyInformationResource\Pages;

use App\Filament\Resources\PropertyInformationResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreatePropertyInformation extends CreateRecord
{
    protected static string $resource = PropertyInformationResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->icon('heroicon-o-building-storefront')
            ->title(auth()->user()->name . ' created a new property!')
            ->body('The property has been create successfully.')
            ->sendToDatabase(User::where('agent', '<>', 1)->get());
    }
}

