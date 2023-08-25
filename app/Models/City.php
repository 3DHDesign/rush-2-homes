<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_id',
        'name_en',
        'name_si',
        'name_ta',
        'sub_name_en',
        'sub_name_si',
        'sub_name_ta',
        'postalcode',
        'latitude',
        'longitude',
    ];

    public function propertyInformations()
    {
        return $this->hasMany(PropertyInformation::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
