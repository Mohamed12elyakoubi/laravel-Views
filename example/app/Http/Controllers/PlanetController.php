<?php

// app\Http\Controllers\PlanetController.php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($planet)
    {
        $selectedPlanet = Planet::where('name', $planet)->first();

        if ($selectedPlanet) {
            return view('planets.show', ['planet' => $selectedPlanet]);
        } else {
            return view('planets.notfound');
        }
    }
}
