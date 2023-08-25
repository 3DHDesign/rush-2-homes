<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyCategoryResource\Pages;
use App\Filament\Resources\PropertyCategoryResource\RelationManagers;
use App\Models\PropertyCategory;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropertyCategoryResource extends Resource
{
    protected static ?string $model = PropertyCategory::class;

    // protected static ?string $navigationIcon = 'heroicon-o-color-swatch';

    protected static ?string $navigationGroup = 'Property assets';
    protected static ?int $navigationSort = 6;

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
                                Section::make('Add property category')
                                    ->description('Make a new property category')
                                    ->schema([
                                        TextInput::make('en_name')
                                            ->rules(['max:255', 'string'])
                                            ->required()
                                            ->placeholder('Category english name'),
                                        TextInput::make('si_name')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Category sinhala name'),
                                        TextInput::make('ta_name')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Category tamil name'),
                                    ]),

                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('en_name')->searchable(),
                TextColumn::make('si_name')->searchable(),
                TextColumn::make('ta_name')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPropertyCategories::route('/'),
            'create' => Pages\CreatePropertyCategory::route('/create'),
            'edit' => Pages\EditPropertyCategory::route('/{record}/edit'),
        ];
    }
}
