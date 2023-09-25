<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyCategory extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'property_property_type_id', 'en_name', 'si_name', 'ta_name'];

    protected $table = 'property_categories';

    public function propertyInformations(): BelongsTo
    {
        return $this->belongsTo(PropertyInformation::class);
    }

    // public function PropertySubCategory(): BelongsTo
    // {
    //     return $this->belongsTo(SubPropertyCategory::class);
    // }

    public function subPropertyCategories(): HasMany
    {
        return $this->hasMany(SubPropertyCategory::class, 'property_category_id');
    }

    protected $casts = [
        'property_property_type_id' => 'array',
    ];
}
