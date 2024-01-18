<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    protected $fillable = ['name'];  // Voeg eventuele andere velden toe

    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}


