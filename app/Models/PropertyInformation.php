<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class PropertyInformation extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'id',
        'property_type_id',
        'en_title',
        'si_title',
        'ta_title',
        'property_category_id',
        'currency',
        'price',
        'slug',
        'bedrooms',
        'bathrooms',
        'garages',
        'floors',
        'en_description',
        'si_description',
        'ta_description',
        'document',
        'gallery',
        'en_address',
        'si_address',
        'ta_address',
        'zip_code',
        'map',
        'city_id',
        'district_id',
        'meta_title',
        'aminities',
        'label',
        'status',
        'province_id',
        'agent_id',
        'property_code',
        'land_size',
        'size_type',
        'price_type',
        'sub_property_category_id',
    ];

    protected $casts = [
        'gallery' => 'array',
        'document' => 'array',
        'aminities' => 'array',
        'label' => 'array',
    ];

    protected $table = 'property_informations';

    public function propertyType(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }

    public function labels(): HasMany
    {
        return $this->hasMany(Label::class, 'id', 'label');
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    public function propertyCategory(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'property_category_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function propertyFeatures()
    {
        return $this->hasMany(
            PropertyFeatures::class,
            'property_information_id'
        );
    }
}
