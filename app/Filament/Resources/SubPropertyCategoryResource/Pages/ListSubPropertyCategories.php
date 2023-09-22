<?php

namespace App\Filament\Resources\SubPropertyCategoryResource\Pages;

use App\Filament\Resources\SubPropertyCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubPropertyCategories extends ListRecords
{
    protected static string $resource = SubPropertyCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
