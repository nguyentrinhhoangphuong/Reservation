<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function touristSpots()
    {
        return $this->belongsTo(TouristSpot::class, 'tourist_spots_id');
    }

    public function likedByusers()
    {
        return $this->morphToMany(User::class, 'likeable');
    }
}
