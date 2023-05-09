<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookRide extends Model
{
    protected $fillable = [
        'fullname', 'contact', 'vechiels_type', 'destination', 'return_date', 'checkout_date'
    ];
}
