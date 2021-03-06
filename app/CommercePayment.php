<?php

namespace celiacomendoza;

use Illuminate\Database\Eloquent\Model;

class CommercePayment extends Model
{

    protected $fillable = [
        'commerce_id', 'payment_id'
    ];

    public $timestamps = false;

    public function Payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function Commerce()
    {
        return $this->belongsTo(Commerce::class);
    }
}
