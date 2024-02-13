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
        'type',
    ];

    public function competences()
    {
        return $this->belongsToMany(competences::class, 'competences_id');
    }
    public function entreprises(){
        return $this->belongsTo(entreprises::class, 'id_entreprise');
    }
}