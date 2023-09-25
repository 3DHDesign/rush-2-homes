<?php

namespace App\Filament\Resources\SubPropertyCategoryResource\Pages;

use App\Filament\Resources\SubPropertyCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubPropertyCategory extends EditRecord
{
    protected static string $resource = SubPropertyCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
