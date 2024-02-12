<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competences_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'type_user',
        'competences_id',
        'entreprise_id',
    ];

    public function entreprise()
    {
        return $this->belongsTo(entreprises::class, 'entreprise_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function competence()
    {
        return $this->belongsTo(competences::class, 'competence_id');
    }
}
