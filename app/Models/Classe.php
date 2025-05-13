<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = ['nom_classe'];

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }

}
