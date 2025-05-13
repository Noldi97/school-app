<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $table = 'presences';

    protected $fillable = ['seance_id', 'étudiant_id', 'statut'];

    public function seances()
    {
        return $this->belongsTo(Seance::class);
    }

    public function etudiants()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
