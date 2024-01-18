<?php

// app\Http\Controllers\PlanetController.php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        // Gebruik de scope om eager loading toe te passen
        $planets = Planet::withSolarSystem()->get();

        return view('planets.index', ['planets' => $planets]);
    }

    public function show($planet)
    {
        // Gebruik de scope om eager loading toe te passen
        $selectedPlanet = Planet::withSolarSystem()->where('name', $planet)->first();

        if ($selectedPlanet) {
            return view('planets.show', ['planet' => $selectedPlanet]);
        } else {
            return view('planets.notfound');
        }
    }
}
