<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyApprovelResource\Pages;
use App\Filament\Resources\PropertyApprovelResource\RelationManagers;
use App\Models\Amenity;
use App\Models\City;
use App\Models\District;
use App\Models\Label;
use App\Models\PropertyApprovel;
use App\Models\PropertyCategory;
use App\Models\PropertyInformation;
use App\Models\PropertyType;
use App\Models\Province;
use App\Models\Role;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

class PropertyApprovelResource extends Resource
{
    protected static ?string $model = PropertyApprovel::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-badge';

    protected static ?string $navigationGroup = 'Property assets';
    protected static ?int $navigationSort = 7;

    public static function getNavigationBadge(): ?string
    {
        return PropertyApprovel::where('status', 'Reviewing')->count() == 0 ? '' : PropertyApprovel::where('status', 'Reviewing')->count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'success';
    }

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
                                Section::make('Create a new property')
                                    ->description('Make a new property for the listing!')
                                    ->schema([

                                        Select::make('property_type_id')
                                            ->options(PropertyType::pluck('en_name', 'id'))
                                            ->searchable()
                                            ->label('Select Type')
                                            ->required()
                                            ->preload(),
                                        TextInput::make('property_code')
                                            ->label('Property code')
                                            ->prefix('R2H')
                                            ->rules(['max:255'])
                                            ->required(),
                                        TextInput::make('en_title')
                                            ->label('English title')
                                            ->rules(['max:255'])
                                            ->required()
                                            ->placeholder('Property english name')
                                            ->live()
                                            ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                                if (!$get('is_slug_changed_manually') && filled($state)) {
                                                    $slug = Str::slug($state);
                                                    $existingSlugs = PropertyInformation::where('slug', 'LIKE', $slug . '%')->pluck('slug')->toArray();

                                                    $suffix = 1;
                                                    while (in_array($slug, $existingSlugs)) {
                                                        $slug = Str::slug($state) . '-' . $suffix;
                                                        $suffix++;
                                                    }

                                                    $set('slug', $slug);
                                                }
                                            }),

                                        TextInput::make('si_title')
                                            ->label('Sinhala title')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Property sinhala name'),
                                        TextInput::make('ta_title')
                                            ->label('Tamil title')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Property tamil name'),
                                        Textarea::make('en_description')
                                            ->label('English description')
                                            ->rows(5)
                                            ->cols(5)
                                            ->placeholder('Enter english description'),
                                        Textarea::make('si_description')
                                            ->label('Sinhala description')
                                            ->rows(5)
                                            ->cols(5)
                                            ->placeholder('Enter sinhala description'),
                                        Textarea::make('ta_description')
                                            ->label('Tamil description')
                                            ->rows(5)
                                            ->cols(5)
                                            ->placeholder('Enter tamil description'),
                                        Fieldset::make('Property area')
                                            ->schema([
                                                Select::make('city_id')
                                                    ->label('Select city')
                                                    ->options(City::pluck('name_en', 'id'))
                                                    ->required()
                                                    ->searchable(),
                                                TextInput::make('zip_code')
                                                    ->label('Enter zip code')
                                                    ->rules(['max:5'])
                                                    ->required(),
                                                Select::make('district_id')
                                                    ->label('Select district')
                                                    ->options(District::pluck('name_en', 'id'))
                                                    ->required()
                                                    ->searchable(),
                                                Select::make('province_id')
                                                    ->label('Select province')
                                                    ->options(Province::pluck('name_en', 'id'))
                                                    ->required()
                                                    ->searchable(),

                                            ]),
                                        TextInput::make('slug')
                                            ->label('Property slug')
                                            ->afterStateUpdated(function (Closure $set) {
                                                $set('is_slug_changed_manually', true);
                                            })
                                            ->required()

                                            ->placeholder('Auto generated slug'),
                                    ]),

                            ]),

                        Grid::make()
                            ->columnSpan([
                                'default' => 1,
                                'md' => 1,
                                'lg' => 1,
                            ])
                            ->schema([
                                Section::make('Add advance details')
                                    ->schema([
                                        Select::make('agent_id')

                                            ->searchable()
                                            ->label('Select Agent')
                                            ->options(User::where('agent', 1)->pluck('name', 'id')),
                                        Select::make('status')
                                            ->searchable()
                                            ->options([
                                                'Draft' => 'Draft',
                                                'Reviewing' => 'Reviewing',
                                                'Published' => 'Published',
                                            ]),
                                        Select::make('property_category_id')
                                            ->options(PropertyCategory::pluck('en_name', 'id'))
                                            ->searchable()
                                            ->label('Select Category')
                                            ->required()
                                            ->preload(),
                                        Select::make('label')
                                            ->options(Label::pluck('en_name', 'id'))
                                            ->searchable()
                                            ->multiple()
                                            ->label('Select lable')
                                            ->required()
                                            ->preload(),
                                        FileUpload::make('gallery')
                                            ->label('Add a property images')
                                            ->directory('properties')
                                            ->preserveFilenames()
                                            ->multiple()
                                            ->enableReordering()
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                            ]),
                                        Fieldset::make('Property price')
                                            ->schema([
                                                Select::make('currency')
                                                    ->options(['lkr' => 'Rs', 'usd' => 'USD', 'uae' => 'UAE'])
                                                    ->required()
                                                    ->searchable(),
                                                TextInput::make('price')
                                                    ->label('Total price')
                                                    ->required()
                                                    ->placeholder('Enter total price'),
                                            ]),
                                        FileUpload::make('document')
                                            ->label('Add a property documents')
                                            ->directory('properties/documents')
                                            ->preserveFilenames()
                                            ->multiple(),
                                        Textarea::make('en_address')
                                            ->label('English address')
                                            ->rows(5)
                                            ->cols(5)
                                            ->placeholder('Enter english address'),
                                        Textarea::make('si_address')
                                            ->rows(5)
                                            ->cols(5)
                                            ->label('Sinhala address')
                                            ->placeholder('Enter sinhala address'),
                                        Textarea::make('ta_address')
                                            ->rows(5)
                                            ->cols(5)
                                            ->label('Tamil address')
                                            ->placeholder('Enter tamil address'),
                                        Select::make('aminities')
                                            ->options(Amenity::pluck('en_name', 'id'))
                                            ->searchable()
                                            ->multiple()
                                            ->label('Select Amenities')
                                            ->required()
                                            ->preload(),

                                    ]),

                            ]),

                        Grid::make()
                            ->columnSpan([
                                'default' => 3,
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->schema([
                                Section::make('SEO details')
                                    ->description('Add meta tags for seo')
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->label('Meta title')
                                            ->rules(['max:255', 'string'])
                                            ->nullable()
                                            ->placeholder('Enter meta title'),
                                    ]),

                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->poll('30s')
            ->columns([
                ImageColumn::make('propertyAgents.avatar')->circular()->label('Property agent'),
                TextColumn::make('en_title')->searchable()->limit(20)->wrap()->label('Title'),
                TextColumn::make('property_code')
                    ->copyable()
                    ->prefix('R2H')
                    ->copyMessage('Property ID copied')
                    ->icon('heroicon-m-identification'),
                TextColumn::make('propertyType.en_name'),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Draft' => 'gray',
                        'Reviewing' => 'warning',
                        'Published' => 'success',
                        'Rejected' => 'danger',
                    }),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->searchable()
                    ->options([
                        'Draft' => 'Draft',
                        'Reviewing' => 'Reviewing',
                        'Published' => 'Published',
                    ]),
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('created_from'),
                        DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
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
            'index' => Pages\ListPropertyApprovels::route('/'),
            'create' => Pages\CreatePropertyApprovel::route('/create'),
            'edit' => Pages\EditPropertyApprovel::route('/{record}/edit'),
        ];
    }
}
