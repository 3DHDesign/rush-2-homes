<?php

namespace App\Filament\Resources\PropertyInformationResource\Pages;

use App\Filament\Resources\PropertyInformationResource;
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
            ->title(auth()->user()->name . 'Property Created!')
            ->body('The property created successfully.')
            ->sendToDatabase(auth()->user());
    }
}

