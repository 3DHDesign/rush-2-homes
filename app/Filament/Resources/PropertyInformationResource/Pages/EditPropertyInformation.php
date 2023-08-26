<?php

namespace App\Filament\Resources\PropertyInformationResource\Pages;

use App\Filament\Resources\PropertyInformationResource;
use App\Models\User;
use Filament\Actions;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Notifications\Messages\BroadcastMessage;

class EditPropertyInformation extends EditRecord
{
    protected static string $resource = PropertyInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title(auth()->user()->name . ' property Updated!')
            ->body('The property has been saved successfully.')
            ->sendToDatabase(User::where('agent', '<>', 1)->get());
    }

}
