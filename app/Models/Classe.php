<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = ['nom_classe'];

    public function enseignants()
    {
        return $this->hasMany(Enseignant::class);
    }

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }

}
