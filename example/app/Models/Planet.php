<?php
// In app/Models/Planet.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $fillable = ['name'];  // Voeg eventuele andere velden toe

    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }

    public function scopeWithSolarSystem($query)
    {
        return $query->with('solarSystem');
    }
}




