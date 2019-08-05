<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Commerce;
use celiacomendoza\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function noReadMail()
    {
        $users = Message::join('commerces', 'messages.commerce_id', 'commerces.id')
            ->join('users', 'commerces.user_id', 'users.id')
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

    public function counter()
    {
        $commerces = Commerce::join('users', 'commerces.user_id', 'users.id')
            ->where('commerces.region_id', '!=', NULL)
            ->get();

        foreach ($commerces as $commerce) {

            Mail::send('web.mails.counter', ['commerce' => $commerce], function ($msj) use ($commerce) {

                $msj->from('no-respond@celiacosmendoza.com', 'CeliacosMendoza');

                $msj->subject('Mensaje desde celiacomendoza');

                $msj->to($commerce->email, $commerce->name);

            });
        }
    }
}
