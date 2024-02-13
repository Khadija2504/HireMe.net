<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post',
        'users_id',
        'id_offre_demplois',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'users_id');
    }
}
