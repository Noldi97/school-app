<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;

    protected $table = 'chapitres';

    protected $fillable = ['nom_chapitre', 'description', 'cours_id'];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
