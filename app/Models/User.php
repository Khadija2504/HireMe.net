<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard = 'user';
    protected $fillable = [
        'name',
        'nom',
        'prenom',
        'adresse',
        'contact_information',
        'age',
        'titre',
        'industrie',
        'about_me',
        'photo',
        'background',
        'poste_actuel',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function postUser(): HasMany
    {
        return $this->hasMany(post::class);
    }

    public function langues_maitrisees(){
        return $this->belongsToMany(langues_maitrisees::class, 'langues_maitrisees_user.id','users_id', 'langues_maitrisees_id');
    }
}
