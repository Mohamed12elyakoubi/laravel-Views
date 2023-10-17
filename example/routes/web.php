<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

    // Create a plain text response with the content
    //$content = implode("\n\n", $planets);
    return view('/test', ['planets' => $planets]);

});
    
