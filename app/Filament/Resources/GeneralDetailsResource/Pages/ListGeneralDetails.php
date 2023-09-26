<?php

namespace App\Filament\Resources\GeneralDetailsResource\Pages;

use App\Filament\Resources\GeneralDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGeneralDetails extends ListRecords
{
    protected static string $resource = GeneralDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
