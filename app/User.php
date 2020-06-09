<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    const ADMIN_ROLE = 1;
    const USER_ROLE = 0;

    use Notifiable;
    protected $table="users";
    protected $primaryKey="id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','username',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

        'username'       => 'string',
        'id'             => 'integer',
        'email'          => 'string',
        'password'       => 'string',
        'isAdmin'        => 'boolean',
        'remember_token' => 'string',
        'created_at'     => 'datetime',
        'updated_at'     => 'datetime'
    ];

    protected $dates = [
        'created_at' ,
        'updated_at'
    ];
}
