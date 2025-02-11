<?php

namespace App\Contracts;

interface FrontendRepositoryInterface
{
    public function getTouristSpot();
    public function getTouristSpotByID($id);
}
