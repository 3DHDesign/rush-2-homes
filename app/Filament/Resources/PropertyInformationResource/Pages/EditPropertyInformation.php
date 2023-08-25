<?php

namespace App\Filament\Resources\PropertyInformationResource\Pages;

use App\Filament\Resources\PropertyInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropertyInformation extends EditRecord
{
    protected static string $resource = PropertyInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
