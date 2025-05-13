<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = ['description', 'statut', 'chapitre_id', 'validation_programme_id'];

    public function chapitres()
    {
        return $this->belongsTo(Chapitre::class);
    }

    public function validationProgrammes()
    {
        return $this->belongsTo(ValidationProgramme::class);
    }
}
