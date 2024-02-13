<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competences_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'type_user',
        'competences_id',
    ];

    public function offresDemploi()
    {
        return $this->belongsToMany(OffreDemplois::class, 'offre_demploi_competences', 'competences_id', 'offre_demploi_id');
    }

}
