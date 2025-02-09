<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristSpot extends Model
{
    use HasFactory;

    public function photo()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('name', 'asc');
    }
}
