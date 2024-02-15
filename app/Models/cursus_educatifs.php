<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class cursus_educatifs extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable =[
        'user_id',
        'nom_cursus_educatifs',
        'description',
        'date',
    ];
}