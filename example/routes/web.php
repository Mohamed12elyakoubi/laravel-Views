<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return  ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});

Route::get('/', function () {
    return view("welcome");
});

Route::get('/gg', function () {

    $planets = [
        'Mars' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
        'Venus' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
        'Earth' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that is inhabited by living things.',
        'Jupiter' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ];


    return view('test', ['planets' => $planets]);
});
Route::get('/planets', 'PlanetController@index');
Route::get('/planets/{planet}', 'PlanetController@show');
Route::get('/planets', function () {

    $planets = [

        [

            'name' => 'Mars',

            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'

        ],

        [

            'name' => 'Venus',

            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'

        ],

        [

            'name' => 'Earth',

            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'

        ],
        [

            'name' => 'Jupiter',

            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'

        ],

    ];
    $selectedPlanet = request('planeet');

    if ($selectedPlanet) {
        $filteredPlanets = collect($planets)->where('name', $selectedPlanet)->all();
    } else {

        $filteredPlanets = $planets;
    }



    return view('test')->with(['planets' => $filteredPlanets]);
});
