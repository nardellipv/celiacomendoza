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

    public function counter()
    {
        $commerces = Commerce::join('users','commerces.user_id','users.id')
            ->where('commerces.region_id', '!=', NULL)
            ->get();

        foreach ($commerces as $commerce) {
            if(Storage::exists('public/' . $commerce->name)) {
                $counter = Storage::get('public/' . $commerce->name);

                Mail::send('web.mails.counter', ['commerce' => $commerce, 'counter' => $counter], function ($msj) use ($commerce) {

                    $msj->from('no-respond@celiacosmendoza.com', 'CeliacosMendoza');

                    $msj->subject('Mensaje desde celiacomendoza');

                    $msj->to($commerce->email, $commerce->name);

                });
            }else{
                $countRand = rand('135','278');
                Storage::put('public/' . $commerce->user_id .'-'. $commerce->name, $countRand);
            }
        }
    }
}
