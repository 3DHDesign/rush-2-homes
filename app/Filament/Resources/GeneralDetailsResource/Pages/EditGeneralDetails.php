<?php

namespace App\Filament\Resources\GeneralDetailsResource\Pages;

use App\Filament\Resources\GeneralDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeneralDetails extends EditRecord
{
    protected static string $resource = GeneralDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
