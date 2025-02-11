<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }

    public function touristSpots()
    {
        return $this->belongsTo(TouristSpot::class, 'tourist_spots_id');
    }
}
