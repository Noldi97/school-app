<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';

    protected $fillable = [
        'nom',
        'prenom',
        'email'
    ];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function presences()
    {
        return $this->hasMany(Presence::class);
    }

}

