<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class experiences_proves extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'nom_competence_prof',
        'user_id',
        'description',
        'date',
    ];
}
