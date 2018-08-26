<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
    protected $fillable = [
        'name', 'address', 'location', 'phone', 'web', 'twitter', 'facebook', 'logo', 'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
