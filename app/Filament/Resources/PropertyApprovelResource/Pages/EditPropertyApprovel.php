<?php

namespace App\Filament\Resources\PropertyApprovelResource\Pages;

use App\Filament\Resources\PropertyApprovelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropertyApprovel extends EditRecord
{
    protected static string $resource = PropertyApprovelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
