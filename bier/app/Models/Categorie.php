<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['naam'];

    // Relatie met de Bier-tabel
    public function bieren()
    {
        return $this->hasMany(Bier::class, 'categorie_id', 'id');
    }
}

?>