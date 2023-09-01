<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyCategory extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'en_name', 'si_name', 'ta_name'];

    protected $table = 'property_categories';

    public function propertyInformations(): BelongsTo
    {
        return $this->belongsTo(PropertyInformation::class);
    }
}
