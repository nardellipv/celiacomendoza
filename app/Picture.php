<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'photo', 'product_id'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
