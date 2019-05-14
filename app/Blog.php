<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'body', 'photo','status','type','slug','user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
