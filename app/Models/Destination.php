<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'image', 'title', 'description', 'price', 'status', 'duration', 'max_people'
    ];

    public function destination_image() {
        return asset('uploads/destination/' . $this->image);
    }
}
