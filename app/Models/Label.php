<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Label extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_name',
        'si_name',
        'ta_name',
        'priority',
        'color',
    ];
}
