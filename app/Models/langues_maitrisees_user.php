<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class langues_maitrisees_user extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'users_id',
        'langues_maitrisees_id',
    ];

    public function langues_maitrise(){
        return $this->belongsTo(langues_maitrisees::class, 'langues_maitrisees_id');
    }
}
