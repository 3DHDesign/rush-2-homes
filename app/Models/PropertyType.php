<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyType extends Model
{
    use HasFactory;

    protected $fillable = ['en_name', 'si_name', 'ta_name'];

    protected $table = 'property_types';

    public function propertyInformations()
    {
        return $this->hasMany(PropertyInformation::class);
    }
}
