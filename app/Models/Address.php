<?php

namespace App\Models;

use App\Presenters\AddressPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory, AddressPresenter;

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class, 'tourist_spots_id');
    }
}
