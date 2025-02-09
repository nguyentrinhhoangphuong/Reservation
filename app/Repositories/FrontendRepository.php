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
}
