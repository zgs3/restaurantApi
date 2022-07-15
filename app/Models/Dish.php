<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public $fillable = ['name', 'price', 'image_link', 'restaurant_id'];

    public function restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }

    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
