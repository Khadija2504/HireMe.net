<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experiences_proves extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom_competence_prof',
        'user_id',
        'description',
        'date',
    ];
}
