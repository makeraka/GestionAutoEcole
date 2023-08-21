<?php

namespace App\Models;

use App\Models\Courspratique;
use App\Models\Examen;
use App\Models\Planing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Moniteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','prenom', 'sexe','adresse','tel','poste'
    ];

    public function theories(){
        return $this->belongsTo(Theorie::class,);
    }

    public function examens (){
        return $this->hasMany(Examen::class);
    }

    public function couspratiques (){
        return $this->hasMany(Courspratique::class);
    }

    public function Planing (){
        return $this->hasMany(Planing::class);
    }
}
 