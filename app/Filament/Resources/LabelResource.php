<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LabelResource\Pages;
use App\Filament\Resources\LabelResource\RelationManagers;
use App\Models\Label;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LabelResource extends Resource
{
    protected static ?string $model = Label::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    protected static ?string $navigationGroup = 'Property assets';
    protected static ?int $navigationSort = 2;

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
                                Section::make('New label')
                                    ->description('Make a new label')
                                    ->schema([
                                        TextInput::make('en_name')
                                            ->rules(['max:255', 'string'])
                                            ->required()
                                            ->placeholder('Label english name'),
                                        TextInput::make('si_name')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Label sinhala name'),
                                        TextInput::make('ta_name')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Label tamil name'),
                                    ]),

                            ]),
                        Grid::make()
                            ->columnSpan([
                                'default' => 1,
                                'md' => 1,
                                'lg' => 1,
                            ])
                            ->schema([
                                Section::make('Advance settings')
                                    ->schema([
                                        ColorPicker::make('color'),

                                        Select::make('priority')
                                            ->searchable()
                                            ->options([
                                                '1' => 'Highest',
                                                '2' => 'High',
                                                '3' => 'Medium',
                                                '4' => 'Low',

                                            ]),
                                    ]),

                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('en_name')->searchable()->label('English name'),
                TextColumn::make('si_name')->label('Sinhala name'),
                TextColumn::make('ta_name')->label('Tamil name'),
                ColorColumn::make('color')->label('Label color'),
                TextColumn::make('priority')->label('Priority'),
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
            'index' => Pages\ListLabels::route('/'),
            'create' => Pages\CreateLabel::route('/create'),
            'edit' => Pages\EditLabel::route('/{record}/edit'),
        ];
    }
}
