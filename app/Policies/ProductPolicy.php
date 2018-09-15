<?php

namespace celiacomendoza\Policies;

use celiacomendoza\Commerce;
use celiacomendoza\Product;
use celiacomendoza\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function passProduct(User $user, Product $product)
    {

        return $user->id == $product->commerce_id;
    }
}
