<?php

namespace App\Http\Controllers;

use App\Http\Resources\SliderResource;
use App\Models\Slider;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('type', 'main')->get();

        return Inertia::render('Home', [
            'title' => 'Home',
            'sliders' => SliderResource::collection($sliders)->resolve(),
        ]);
    }
}
