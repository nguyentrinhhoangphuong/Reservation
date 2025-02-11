<?php

namespace App\Repositories;

use App\Contracts\FrontendRepositoryInterface;
use App\Models\TouristSpot;

class FrontendRepository implements FrontendRepositoryInterface
{

    public function getTouristSpot()
    {
        $data = TouristSpot::with(['photo', 'city'])->ordered()->paginate(6);
        return $data;
    }

    public function getTouristSpotByID($id)
    {
        $data = TouristSpot::with(['photo', 'city', 'address', 'rooms.photos', 'likedByUsers', 'comments.user', 'articles'])->findOrFail($id);
        return $data;
    }
}
