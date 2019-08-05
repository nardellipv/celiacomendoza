<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function Products()
    {
        return $this->hasMany(Product::class);
    }

    public function Recipes()
    {
        return $this->hasMany(Recipes::class);
    }
}
