<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function touristSpot()
    {
        return $this->hasMany(TouristSpot::class, 'city_id');
    }
}
