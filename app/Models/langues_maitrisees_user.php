<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class langues_maitrisees_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'type_user',
        'langues_maitrisees_id',
    ];
}
