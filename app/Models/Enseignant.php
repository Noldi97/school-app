<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Enseignant extends Model
{
    use HasFactory;

    protected $table = 'enseignants';

    protected $fillable = [
        'nom',
        'prenom',
        'specialite',
        'email',
        'classe_id'
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }


}

