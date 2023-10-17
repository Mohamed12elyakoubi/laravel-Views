<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return  ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});

Route::get('/', function() {
    return view("welcome"); 
});

Route::get('/gg', function() {

    $planets = [
        'Mars' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
        'Venus' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
        'Earth' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that is inhabited by living things.',
        'Jupiter' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ];


    return view('test', ['planets' => $planets]);

});
    
Route::get('/planets', function () {
    $allPlanets =[
        'Mars' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
        'Venus' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
        'Earth' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that is inhabited by living things.',
        'Jupiter' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ];

    $planetName = request('planet');

    if ($planetName) {
        
        $planets = [$planetName => $allPlanets[$planetName]];
    } else {
        $planets = $allPlanets;
    }

    return view('planets', ['planets' => $planets]);
});
