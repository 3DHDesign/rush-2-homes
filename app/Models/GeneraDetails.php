<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneraDetails extends Model
{
    use HasFactory;
    protected $table = 'general_details';

    protected $fillable = [
        'en_address_lk',
        'si_address_lk',
        'ta_address_lk',
        'en_address_uae',
        'si_address_uae',
        'ta_address_uae',
        'contact_number_lk',
        'contact_number_uae',
        'email_uae',
        'email_lk',
        'en_short_about',
        'si_short_about',
        'ta_short_about',
        'maintain_mode',
    ];
}
