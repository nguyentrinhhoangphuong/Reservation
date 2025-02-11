<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likeable extends Model
{
    use HasFactory;

    public function touristSpot()
    {
        return $this->morphedByMany(TouristSpot::class, 'likeable');
    }
}
