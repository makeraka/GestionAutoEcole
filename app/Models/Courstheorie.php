<?php

namespace App\Models;

use App\Models\Theorie;
use App\Models\Moniteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Courstheorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'theorie_id', 'moniteur_id', 'dateCour','heureDebut', 'heureFin'
    ];

    public function moniteur(){
        return $this->belongsTo(Moniteur::class);
    }

    public function theorie(){
        return $this->belongsTo(Theorie::class);
    }
}
