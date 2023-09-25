<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralDetailsResource\Pages;
use App\Filament\Resources\GeneralDetailsResource\RelationManagers;
use App\Models\GeneralDetails;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeneralDetailsResource extends Resource
{
    protected static ?string $model = GeneralDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->columns(2)
                    ->schema([
                        Grid::make()
                            ->columnSpan([
                                'default' => 3,
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->schema([
                                TextInput::make('en_address_lk')
                                    ->label('English Address (LK)')
                                    ->required(),

                                TextInput::make('si_address_lk')
                                    ->label('Sinhala Address (LK)')
                                    ->nullable(),

                                TextInput::make('ta_address_lk')
                                    ->label('Tamil Address (LK)')
                                    ->nullable(),
                            ]),

                        Grid::make()
                            ->columnSpan([
                                'default' => 3,
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->schema([
                                TextInput::make('en_address_uae')
                                    ->label('English Address (UAE)')
                                    ->nullable(),

                                TextInput::make('si_address_uae')
                                    ->label('Sinhala Address (UAE)')
                                    ->nullable(),

                                TextInput::make('ta_address_uae')
                                    ->label('Tamil Address (UAE)')
                                    ->nullable(),
                            ]),
                    ]),
                
                // Second Row
                Grid::make()
                    ->columns(2)
                    ->schema([
                        Grid::make()
                            ->columnSpan([
                                'default' => 3,
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->schema([
                                TextInput::make('contact_number_lk')
                                    ->label('Contact Number (LK)')
                                    ->nullable(),

                                TextInput::make('contact_number_uae')
                                    ->label('Contact Number (UAE)')
                                    ->nullable(),
                            ]),

                        Grid::make()
                            ->columnSpan([
                                'default' => 3,
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->schema([
                                TextInput::make('email_lk')
                                    ->label('Email (LK)')
                                    ->nullable(),

                                TextInput::make('email_uae')
                                    ->label('Email (UAE)')
                                    ->nullable(),
                            ]),
                    ]),

                // Third Row
                Grid::make()
                    ->columns(1)
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('en_short_about')
                                    ->label('Short About (English)')
                                    ->nullable(),

                                TextInput::make('si_short_about')
                                    ->label('Short About (Sinhala)')
                                    ->nullable(),

                                TextInput::make('ta_short_about')
                                    ->label('Short About (Tamil)')
                                    ->nullable(),
                            ]),
                    ]),
                
                // Fourth Row
                Grid::make()
                    ->columns(1)
                    ->schema([
                        Toggle::make('maintain_mode')
                            ->label('Maintain Mode!')
                            ->onIcon('heroicon-m-bolt'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGeneralDetails::route('/'),
            'create' => Pages\CreateGeneralDetails::route('/create'),
            'edit' => Pages\EditGeneralDetails::route('/{record}/edit'),
        ];
    }    
}
