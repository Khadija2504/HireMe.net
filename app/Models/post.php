<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'post',
        'users_id',
        'id_offre_demplois',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'users_id');
    }
}
