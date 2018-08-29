<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
