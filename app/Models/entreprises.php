<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class entreprises extends AuthenticatableUser
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $guard = 'entreprise';
    protected $fillable = [
            'nom',
            'adresse',
            'email',
            'description',
            'slogan',
            'industrie',
            'photo',
            'background',
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

    public function offersEntreprise(): HasMany
    {
        return $this->hasMany(OffreDemplois::class);
    }

    public function offreDemploi(){
        return $this->hasMany(OffreDemplois::class, 'id_entreprise');
    }
}
