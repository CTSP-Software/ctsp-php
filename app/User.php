<?php

namespace App;

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
        'name', 'email', 'password', 'last', 'birth', 'image', 'ability', 'tel', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //protected $table = 'users';

    public function papel1()
    {
        return $this->hasMany(Papeis::class, 'sm_id');
    }

    public function papel2()
    {
        return $this->hasMany(Papeis::class, 'po_id');
    }

    public function papel3()
    {
        return $this->hasMany(Papeis_sec::class, 'papeis_id');
    }
}
