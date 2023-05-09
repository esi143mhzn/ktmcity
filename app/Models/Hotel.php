<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'image', 'title', 'location', 'price','open_time', 'status'
    ];

    public function hotel_image() {
        return asset('uploads/hotel/' . $this->image);
    }
}