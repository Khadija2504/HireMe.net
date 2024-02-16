<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OffreDemplois extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_entreprise',
        'titre',
        'description',
        'type',
    ];


    public function entreprises(){
        return $this->belongsTo(entreprises::class, 'id_entreprise');
    }
}