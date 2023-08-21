<?php

namespace App\Models;

use App\Models\Moniteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planing extends Model
{
    use HasFactory;

    protected $fillable = [
        'jour','cours','heureDebut', 'heureFin','moniteur_id','etat'
     
    ];

    public function moniteur(){
        return $this->belongsTo(Moniteur::class);
    }

}
