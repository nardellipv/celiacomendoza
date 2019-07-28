<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Comment;
use celiacomendoza\Commerce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{

    public function addComment(Request $request, $id)
    {
        $comment = new Comment();
        $comment->commerce_id = $id;
        $comment->fill($request->all())->save();

        $commerce = Commerce::where('id', $id)
            ->first();

        Mail::send('web.mails.comment', ['commerce' => $commerce], function ($msj) use ($commerce) {

            $msj->from('no-respond@celiacosmendoza.com', 'CeliacosMendoza');

            $msj->subject('Mensaje desde celiacomendoza');

            $msj->to($commerce->user->email, $commerce->user->name);

        });

        Session::flash('message', 'Muchas gracias por tu comentario. Has ayudado mucho a la comunidad!!!');
        return back();
    }

    public function positiveComment($id)
    {
        $comment = Comment::where('id', $id)
            ->first();

        if (Cookie::get('votoComment' . $comment->id) == 'votoComment' . $id) {

            Session::flash('message', 'Ya votaste anteriormente a este comentario');

            return back();

        }

        $comment->increment('votes_positive');

        $comment->save();


        Cookie::queue('votoComment' . $comment->id, 'votoComment' . $comment->id, '2628000');

        Session::flash('message', 'Muchas gracias por tu voto');

        return back();
    }

    public function negativeComment($id)
    {
        $comment = Comment::where('id', $id)
            ->first();

        if (Cookie::get('votoComment' . $comment->id) == 'votoComment' . $id) {

            Session::flash('message', 'Ya votaste anteriormente a este comentario');

            return back();

        }

        $comment->increment('votes_negative');

        $comment->save();


        Cookie::queue('votoComment' . $comment->id, 'votoComment' . $comment->id, '2628000');

        Session::flash('message', 'Muchas gracias por tu voto');

        return back();
    }
}
