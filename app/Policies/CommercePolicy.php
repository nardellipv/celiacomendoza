<?php

namespace celiacomendoza\Policies;

use celiacomendoza\Commerce;
use celiacomendoza\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommercePolicy
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

    public function CommercePass(User $user, Commerce $commerce)
    {
        return $user->id == $commerce->user_id;
    }
}
