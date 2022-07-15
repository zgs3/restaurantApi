<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public $fillable = ['title', 'city', 'adress', 'work_hours'];

    public function dishes()
    {
        return $this->hasMany('App\Models\Dish');
    }
}
