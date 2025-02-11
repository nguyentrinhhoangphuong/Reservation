<?php

namespace App\Http\Controllers\frontend;

use App\Contracts\FrontendRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }
    
    public function index()
    {
        $touristSpots = $this->frontendRepository->getTouristSpot();
        return view('frontend.home.index', compact('touristSpots'));
    }

    public function getTouristSpotByID($id, $slug = null)
    {
        $touristSpot = $this->frontendRepository->getTouristSpotByID($id);
        if ($slug && $slug !== $touristSpot->slug) {
            return redirect()->route('tourist-spot', ['id' => $id, 'slug' => $touristSpot->slug]);
        }
    
        return view('frontend.home.show', compact('touristSpot'));
    }
}
