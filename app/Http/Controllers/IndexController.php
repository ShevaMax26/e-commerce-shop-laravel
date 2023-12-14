<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\SliderResource;
use App\Models\Slider;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index(CategoryRepository $catRepository)
    {
        $sliders = Slider::where('type', 'main')->get();

        return Inertia::render('Home', [
            'title' => 'Home',
            'sliders' => SliderResource::collection($sliders)->resolve(),
            'homeGymCats' => CategoryResource::collection($catRepository->homeGymCats(10)),
            'fitnessClubGymCats' => CategoryResource::collection($catRepository->fitnessClubGymCats(7)),
        ]);
    }
}
