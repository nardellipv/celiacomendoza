<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\MailResponseCommerceRequest;
use celiacomendoza\Message;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    public function listMessage()
    {

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $messages = Message::where('commerce_id', $commerce->id)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('web.parts.adminClient._accountMessage', compact('messages'));
    }

    public function readMessage($id)
    {
        $message = Message::find($id);
        $message->read = 'YES';
        $message->save();

        return view('web.parts.adminClient._readMessage', compact('message'));
    }

    public function responsMessage($id)
    {
        $message = Message::find($id);

        return view('web.parts.adminClient._composeMessage',compact('message'));
    }

//    respuesta del comercio
    public function responsMessageCliente(MailResponseCommerceRequest $request, $id)
    {

        $message = Message::find($id);

        Mail::send('web.mails.MailResponseCommerce', [$request->all(), $message], function ($msj)  use ($request, $message) {
            $msj->from('no-respond@celiacomendoza.com');
            $msj->subject('Mensaje em respuesta a tu pregunta');
            $msj->to($message->email, $message->name);
        });

        Session::flash('message', 'Su mensaje fue enviado correctamente. Muchas gracias!!!');
        return back();
    }

    public function deleteMessage($id)
    {
        $message = Message::find($id);
        $message->delete();

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $messages = Message::where('commerce_id', $commerce->id)
            ->orderBy('created_at', 'DESC')
            ->get();

        Session::flash('message', 'Mensaje eliminado correctamente');
        return view('web.parts.adminClient._accountMessage', compact('messages'));
    }
}
