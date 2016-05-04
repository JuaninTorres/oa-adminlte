<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Seteo del campo password encriptado
     *
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        if( ! empty($password))
        {
            $this->attributes['password'] = bcrypt($password);
        }
    }
}
