<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'num_invoice','name', 'price','quantity', 'photo','commerce_id'
    ];

    public function Commerce()
    {
        return $this->belongsTo(Commerce::class);
    }

    public function Products()
    {
        return $this->hasMany(Product::class);
    }
}
