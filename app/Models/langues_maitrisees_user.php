<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class langues_maitrisees_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'langues_maitrisees_id',
    ];

    public function langues_maitrise(){
        return $this->belongsTo(langues_maitrisees::class, 'langues_maitrisees_id');
    }
}
