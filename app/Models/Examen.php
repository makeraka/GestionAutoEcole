<?php

namespace App\Models;
use App\Models\Moniteur;
use App\Models\Apprenant;
use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $fillable = [
        'apprenant_id','moniteur_id','date','heureDebut','heureFin','typeExamen','vehicule_id','etat','resultat'

    ];

    public function apprenant(){
        return $this->belongsTo(Apprenant::class);
    }

    public function moniteur(){
        return $this->belongsTo(Moniteur::class);
    }

    public function vehicule(){
        return $this->belongsTo(Vehicule::class);
    }

    
}
