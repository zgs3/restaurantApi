<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    public $fillable = ['rating', 'dish_id'];

    public function dish()
    {
        return $this->belongsTo('App\Models\Dish');
    }
}
