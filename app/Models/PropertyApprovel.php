<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class PropertyApprovel extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'property_informations';

    protected $fillable = [
        'property_type_id',
        'en_title',
        'si_title',
        'ta_title',
        'property_category_id',
        'currency',
        'price',
        'slug',
        'sqft',
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
        'property_code'
    ];

    protected $casts = [
        'gallery' => 'array',
        'document' => 'array',
        'aminities' => 'array',
        'label' => 'array',
    ];

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function propertyCategory()
    {
        return $this->belongsTo(PropertyCategory::class);
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
