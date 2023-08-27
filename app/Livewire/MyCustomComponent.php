<?php

namespace App\Livewire;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Jeffgreco13\FilamentBreezy\Livewire\MyProfileComponent;

class MyCustomComponent extends MyProfileComponent
{
    protected string $view = "livewire.my-custom-component";
 
    //
 
    public array $data;
 
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
            ])
            ->statePath('data');
    }
}
