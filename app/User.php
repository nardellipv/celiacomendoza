<?php

namespace celiacomendoza;

use celiacomendoza\Notifications\CustomResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'lastname', 'type', 'status', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPasswordNotification($token));
    }

    public function Recipes()
    {
        return $this->hasMany(Recipes::class);
    }
}
