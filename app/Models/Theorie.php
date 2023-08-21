<?php

namespace App\Models;

use App\Models\Moniteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Theorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom'
    ];
    public function moniteurs(){
        return $this->belongsTo(Moniteur::class,'moniteur_id','id');
    }
}
