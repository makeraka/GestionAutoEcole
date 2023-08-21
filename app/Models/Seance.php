<?php

namespace App\Models;
use App\Models\Courspratique;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom'
    ];

    public function couspratiques (){
        return $this->hasMany(Courspratique::class);
    }
}
