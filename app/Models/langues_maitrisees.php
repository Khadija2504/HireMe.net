<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class langues_maitrisees extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_langues_maitrisees',
    ];

    

}