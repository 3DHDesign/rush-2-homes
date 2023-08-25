<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Amenity extends Model
{
    use HasFactory;

    protected $fillable = ['en_name', 'si_name', 'ta_name', 'icon'];


    public function propertyInformation()
    {
        return $this->belongsTo(PropertyInformation::class);
    }
}
