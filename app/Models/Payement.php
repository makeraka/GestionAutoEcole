<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie','date','prix', 'montantpaye' ,'montantrestant','apprenant_id'
     
    ];

    public function apprenant(){
        return $this->belongsTo(Apprenant::class);
    }
}
