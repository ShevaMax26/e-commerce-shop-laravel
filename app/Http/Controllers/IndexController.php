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
    public function index(CategoryRepository $categoryRepository)
    {
        $sliders = Slider::where('type', 'main')->get();

        return Inertia::render('Home', [
            'title' => 'Home',
            'sliders' => SliderResource::collection($sliders)->resolve(),
            'homeGymCats' => CategoryResource::collection($categoryRepository->homeGymCats(10)),
        ]);
    }
}
