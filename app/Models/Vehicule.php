<?php

namespace App\Models;
use App\Models\Examen;
use App\Models\Courspratique;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'type' ,'modele','marque','imatricule','etat'
    ];

    public function examens (){
        return $this->hasMany(Examen::class);
    }

    public function pratique (){
        return $this->hasMany(Courspratique::class);
    }
}
