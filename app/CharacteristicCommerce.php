<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class CharacteristicCommerce extends Model
{
    public $timestamps = false;

    public function Characteristic()
    {
        return $this->belongsTo(Characteristic::class);
    }

    public function Commerce()
    {
        return $this->belongsTo(Commerce::class);
    }
}
