<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubPropertyCategory extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'property_category_id', 'en_name', 'si_name', 'ta_name'];

    public function propertyCategory(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class);
    }
}
