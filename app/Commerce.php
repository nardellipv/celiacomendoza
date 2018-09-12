<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
    protected $fillable = [
        'name', 'address', 'location', 'phone', 'web', 'twitter', 'facebook', 'logo', 'about','user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function Messages()
    {
        return $this->hasMany(Message::class);
    }
}
