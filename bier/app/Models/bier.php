<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bier extends Model
{
    protected $fillable = ['naam', 'valt_onder_id', 'categorie_id'];

    // Relatie met zichzelf voor het vallen onder een ander bier
    public function subBieren()
    {
        return $this->hasMany(Bier::class, 'valt_onder_id', 'id');
    }

    // Relatie met de Categorie-tabel
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
    }
}

?>