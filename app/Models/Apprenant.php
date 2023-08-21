<?php

namespace App\Models;
use App\Models\Examen;
use App\Models\Payement;
use App\Models\Courspratique;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apprenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','prenom','sexe', 'tel' ,'date','adresse', 'permis', 'etat', 'user_id'
     
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payements (){
        return $this->hasMany(Payement::class);
    }

    public function examens (){
        return $this->hasMany(Examen::class);
    }

    public function courspratiques (){
        return $this->hasMany(Courspratique::class);
    }
}
