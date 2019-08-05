<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $fillable = [
        'name', 'ingredients', 'steps', 'photos','user_id','cateogry_id'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
