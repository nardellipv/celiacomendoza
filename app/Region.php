<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function Commerce()
    {
        return $this->hasMany(Commerce::class);
    }
}
