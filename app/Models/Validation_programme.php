<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidationProgramme extends Model
{
    use HasFactory;

    protected $table = 'validation_programmes';

    protected $fillable = ['enseignant_id', 'etudiant_id', 'date_validation'];

    public function items()
    {
        return $this->hasOne(Item::class);
    }

}

