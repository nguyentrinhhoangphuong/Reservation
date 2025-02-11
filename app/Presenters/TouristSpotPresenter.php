<?php

namespace App\Presenters;

use Illuminate\Support\Str;

trait TouristSpotPresenter
{
    public function scopeOrdered($query)
    {
        return $query->orderBy('name', 'asc');
    }

    public function getSlugAttribute()
    {
        return Str::slug($this->name);
    }
}
