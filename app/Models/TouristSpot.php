<?php

namespace App\Models;

use App\Presenters\TouristSpotPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristSpot extends Model
{
    use HasFactory, TouristSpotPresenter;

    public function photo()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function likedByUsers()
    {
        return $this->morphToMany(User::class, 'likeable');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'tourist_spots_id');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class,'tourist_spots_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function articles()
    {
        return $this->hasMany(Article::class,'tourist_spots_id');
    }

}
