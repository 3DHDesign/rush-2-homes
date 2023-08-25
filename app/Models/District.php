<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id',
        'name_en',
        'name_si',
        'name_ta',
    ];

    public function propertyInformations()
    {
        return $this->hasMany(PropertyInformation::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
