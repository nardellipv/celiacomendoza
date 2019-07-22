<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Message;
use celiacomendoza\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function noReadMail()
    {
        $users = Message::join('commerces','messages.commerce_id','commerces.id')
            ->join('users','commerces.user_id','users.id')
            ->where('messages.read', "NO")
            ->get();

        foreach ($users as $user) {
            Mail::send('web.mails.noReadMail', ['user' => $user], function ($msj) use ($user) {

                $msj->from('no-respond@celiacosmendoza.com', 'CeliacosMendoza');

                $msj->subject('Mensaje desde celiacomendoza');

                $msj->to($user->email, $user->name);

            });
        }
    }
}
