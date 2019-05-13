<?php

namespace celiacomendoza;

use Faker\Provider\Payment;
use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{

    protected $fillable = [
        'name','address', 'phone', 'web', 'twitter', 'facebook', 'logo', 'slug', 'about','user_id', 'province_id','region_id'
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

    public function Region()
    {
        return $this->belongsTo(Region::class);
    }

    public function Province()
    {
        return $this->belongsTo(Province::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function Characteristic()
    {
        return $this->belongsToMany(Characteristic::class);
    }
}
