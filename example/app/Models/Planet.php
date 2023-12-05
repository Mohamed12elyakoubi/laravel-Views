<?php

// In app/Models/Planet.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    // Definieer eventuele andere eigenschappen van de planets tabel

    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }
}

