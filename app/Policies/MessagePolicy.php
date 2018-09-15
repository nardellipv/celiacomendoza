<?php

namespace celiacomendoza\Policies;

use celiacomendoza\Message;
use celiacomendoza\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessagePolicy
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

    public function MessagePass(User $user, Message $message)
    {
        return $user->id == $message->commerce_id;
    }
}
