<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'image', 'title', 'description', 'price', 'status'
    ];

    public function food_image() {
        return asset('uploads/food/' . $this->image);
    }
}
