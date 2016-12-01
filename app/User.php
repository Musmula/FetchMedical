<?php

namespace App;

use App\Pet;
use App\Vet;
use App\UserContact;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pets() {
        return $this->hasMany(Pet::class);
    }

    public function contact() {
        return $this->hasOne(UserContact::class);
    }

    public function vet() {
        return $this->hasOne(Vet::class);
    }
}
