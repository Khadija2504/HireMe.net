<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreDemplois extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_entreprise',
        'titre',
        'description',
        'competences_requises_id',
        'type',
    ];
}