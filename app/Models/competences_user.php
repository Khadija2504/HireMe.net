<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class competences_user extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'users_id',
        'type_user',
        'offre_demploi_id',
        'competences_id',
    ];

    public function offresDemploi()
    {
        return $this->belongsToMany(OffreDemplois::class, 'offre_demploi_id');
    }
    public function competenceProv()
    {
        return $this->belongsTo(competences::class, 'competences_id');
    }
}