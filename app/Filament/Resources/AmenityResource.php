<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AmenityResource\Pages;
use App\Filament\Resources\AmenityResource\RelationManagers;
use App\Models\Amenity;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AmenityResource extends Resource
{
    protected static ?string $model = Amenity::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';

    protected static ?string $navigationGroup = 'Property assets';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->columns(2)
                    ->schema([
                        Grid::make()
                            ->columnSpan([
                                'default' => 1,
                                'md' => 1,
                                'lg' => 1,
                            ])
                            ->schema([
                                Section::make('New Amenity')
                                    ->description('Make a new Amenity')
                                    ->schema([
                                        TextInput::make('en_name')
                                            ->rules(['max:255', 'string'])
                                            ->required()
                                            ->placeholder('Amenity english name'),
                                        TextInput::make('si_name')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Amenity sinhala name'),
                                        TextInput::make('ta_name')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Amenity tamil name'),
                                    ]),

                            ]),
                        Grid::make()
                            ->columnSpan([
                                'default' => 1,
                                'md' => 1,
                                'lg' => 1,
                            ])
                            ->schema([
                                Section::make('Add a amenity icon')
                                    ->schema([
                                        FileUpload::make('icon')
                                            ->label('Add a new icon'),
                                    ]),

                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('icon')->circular(),
                TextColumn::make('en_name')->searchable(),
                TextColumn::make('si_name'),
                TextColumn::make('ta_name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAmenities::route('/'),
            'create' => Pages\CreateAmenity::route('/create'),
            'edit' => Pages\EditAmenity::route('/{record}/edit'),
        ];
    }
}
