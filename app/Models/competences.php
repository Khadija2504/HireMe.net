<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competences extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_competence',                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    ];
    public function offresDemploi()
    {
        return $this->belongsToMany(OffreDemplois::class, 'offre_demploi_competences', 'competences_id', 'offre_demploi_id');
    }
}
