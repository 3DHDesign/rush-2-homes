<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubPropertyCategoryResource\Pages;
use App\Filament\Resources\SubPropertyCategoryResource\RelationManagers;
use App\Models\PropertyCategory;
use App\Models\SubPropertyCategory;
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

class SubPropertyCategoryResource extends Resource
{
    protected static ?string $model = SubPropertyCategory::class;

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
                                        Select::make('property_category_id')
                                            ->label('Select property category')
                                            ->searchable()
                                            ->required()
                                            ->placeholder('Select category')
                                            ->options(PropertyCategory::pluck('en_name', 'id')),

                                        TextInput::make('en_name')
                                            ->rules(['max:255', 'string'])
                                            ->required()
                                            ->placeholder('Sub category english name'),
                                        TextInput::make('si_name')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Sub category sinhala name'),
                                        TextInput::make('ta_name')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Sub category tamil name'),
                                    ]),

                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('propertyCategory.en_name')->label('Property category'),
                TextColumn::make('en_name')->searchable()->label('English name'),
                TextColumn::make('si_name')->label('Sinhala name'),
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
            'index' => Pages\ListSubPropertyCategories::route('/'),
            'create' => Pages\CreateSubPropertyCategory::route('/create'),
            'edit' => Pages\EditSubPropertyCategory::route('/{record}/edit'),
        ];
    }
}
