<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyInformationResource\Pages;
use App\Filament\Resources\PropertyInformationResource\RelationManagers;
use App\Models\Amenity;
use App\Models\City;
use App\Models\District;
use App\Models\Label;
use App\Models\PropertyCategory;
use App\Models\PropertyInformation;
use App\Models\PropertyType;
use App\Models\Province;
use App\Models\SubPropertyCategory;
use App\Models\User;
use Closure;
use Filament\Forms\Set;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Get;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables\Columns\Layout\Split;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PropertyInformationResource extends Resource
{
    protected static ?string $model = PropertyInformation::class;
    protected static ?string $navigationLabel = 'Property';

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationGroup = 'Property assets';
    protected static ?int $navigationSort = 4;

    protected static ?string $pollingInterval = '30s';

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
                                        Fieldset::make('Property additional details')
                                            ->schema([
                                                TextInput::make('land_size')
                                                    ->label('Land Size')
                                                    ->rules(['numeric'])
                                                    ->placeholder('Enter land size'),

                                                Select::make('size_type')
                                                    ->default('perches')
                                                    ->options(['perches' => 'Perches', 'acres' => 'Acres', 'sqft' => 'sqft'])
                                                    ->searchable(),
                                                TextInput::make('bedrooms')
                                                    ->label('Bedrooms')
                                                    ->rules(['numeric'])
                                                    ->placeholder('Enter total bedrooms'),
                                                TextInput::make('bathrooms')
                                                    ->label('Bathrooms')
                                                    ->rules(['numeric'])
                                                    ->placeholder('Enter total bathrooms'),
                                                TextInput::make('garages')
                                                    ->label('Garages')
                                                    ->rules(['numeric'])
                                                    ->placeholder('Enter total garages'),
                                                TextInput::make('floors')
                                                    ->label('Floors')
                                                    ->rules(['numeric'])
                                                    ->placeholder('Enter total floors'),
                                            ]),
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
                                                    ->rules(['max:6']),
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
                                            ->default('Reviewing')
                                            ->searchable()
                                            ->options([
                                                'Draft' => 'Draft',
                                                'Reviewing' => 'Reviewing',
                                            ])
                                            ->disableOptionWhen(fn (string $value): bool => $value === 'Published'),
                                        Select::make('property_category_id')
                                            ->options(PropertyCategory::pluck('en_name', 'id')->toArray())
                                            ->searchable()
                                            ->label('Select Category')
                                            ->required()
                                            ->preload()
                                            ->afterStateUpdated(fn (callable $set) => $set('sub_property_category_id', null)),
                                        Select::make('sub_property_category_id')
                                            ->options(function (callable $get) {
                                                $propertyCategory = PropertyCategory::find($get('property_category_id'));
                                                if ($propertyCategory == null) {
                                                    return [];
                                                }
                                                return $propertyCategory->subPropertyCategories->pluck('en_name', 'id');
                                            })
                                            ->searchable()
                                            ->label('Select Sub Property Category')
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
                                            ->required()
                                            ->enableReordering()
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                            ]),
                                        Fieldset::make('Property price')
                                            ->schema([
                                                Select::make('currency')
                                                    ->placeholder('Currency')
                                                    ->default('lkr')
                                                    ->options(['lkr' => 'Rs', 'usd' => 'USD', 'uae' => 'AED'])
                                                    ->required()
                                                    ->searchable(),
                                                TextInput::make('price')
                                                    ->label('Price')
                                                    ->rules(['numeric'])
                                                    ->required()
                                                    ->placeholder('Enter total price'),
                                                Select::make('price_type')
                                                    ->placeholder('Price type')
                                                    ->default('perPerch')
                                                    ->options([
                                                        'totalPrice' => 'total price',
                                                        'perPerch' => 'per perch',
                                                        'perAcre' => 'per acre',
                                                        'perMonth' => 'per month',
                                                        'perAnnum' => 'per annum',
                                                    ])
                                                    ->required()
                                                    ->searchable(),
                                            ])->columns(3),
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
                ImageColumn::make('agent.avatar')->circular()->label('Property agent'),
                TextColumn::make('en_title')->searchable()->limit(20)->wrap()->label('Title'),
                TextColumn::make('property_code')
                    ->copyable()
                    ->searchable()
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
                SelectFilter::make('property_category_id')
                    ->label('Select Property Category')
                    ->searchable()
                    ->options(PropertyCategory::pluck('en_name', 'id')->toArray()),
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
            'index' => Pages\ListPropertyInformation::route('/'),
            'create' => Pages\CreatePropertyInformation::route('/create'),
            'edit' => Pages\EditPropertyInformation::route('/{record}/edit'),
        ];
    }
}
