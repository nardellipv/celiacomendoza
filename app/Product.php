<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'offer', 'in_offer', 'highlight', 'available','photo', 'commerce_id', 'category_id'
    ];

    public function Commerce()
    {
        return $this->belongsTo(Commerce::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function Purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
