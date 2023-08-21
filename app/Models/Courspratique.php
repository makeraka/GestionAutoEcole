<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courspratique extends Model
{
    use HasFactory;

    protected $fillable = [
        'seance_id', 'moniteur_id', 'dateCour','heureDebut', 'heureFin','vehicule_id','apprenant_id'
    ];

    public function seance(){
        return $this->belongsTo(Seance::class);
    }

    public function moniteur(){
        return $this->belongsTo(Moniteur::class);
    }

    public function vehicule(){
        return $this->belongsTo(Vehicule::class);
    }

    public function apprenant(){
        return $this->belongsTo(Apprenant::class);
    }
}
