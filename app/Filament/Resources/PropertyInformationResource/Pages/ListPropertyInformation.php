<?php

namespace App\Filament\Resources\PropertyInformationResource\Pages;

use App\Filament\Resources\PropertyInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPropertyInformation extends ListRecords
{
    protected static string $resource = PropertyInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
