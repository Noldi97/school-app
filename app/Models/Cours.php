<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $table = 'cours';

    protected $fillable = ['nom_cours', 'enseignant_id', 'classe_id'];

    public function enseignants()
    {
        return $this->belongsTo(Enseignant::class);
    }

    public function classes()
    {
        return $this->belongsTo(Classe::class);
    }

    public function chapitres()
    {
        return $this->hasMany(Chapitre::class);
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
