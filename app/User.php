<?php

namespace celiacomendoza;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'lastname', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
