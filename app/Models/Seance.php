<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $table = 'seances';

    protected $fillable = ['date_seance'];

    public function presences()
    {
        return $this->hasMany(Presence::class);
    }
}
