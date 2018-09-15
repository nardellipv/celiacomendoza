<?php

namespace celiacomendoza\Policies;

use celiacomendoza\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersonPolicy
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

    public function PersonPass(User $user)
    {
        return $user->id == $user->id;
    }
}
