<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
use celiacomendoza\Message;
use celiacomendoza\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Date\Date;

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

    public function blogMail()
    {
        $currentMonth = date('m');
        $sendPost = Blog::whereRaw('MONTH(created_at) = ?', [$currentMonth])
            ->get();

        $users = User::where('status', "ACTIVE")
            ->get();

        foreach ($users as $user) {
            Mail::send('web.mails.news', ['user' => $user, 'sendPost' => $sendPost], function ($msj) use ($user, $sendPost) {

                $msj->from('no-respond@celiacosmendoza.com', 'CeliacosMendoza');

                $msj->subject('Últimas entradas ✍ del blog');

                $msj->to($user->email, $user->name);

            });
        }
    }
}
