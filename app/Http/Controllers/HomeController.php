<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\MailCustomerRequest;
use celiacomendoza\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function list()
    {
        $commerces = Commerce::where('about', '!=', 'NULL')
            ->where('logo', '!=', 'NULL')
            ->get();

        return view('layouts.main', compact('commerces'));
    }

    public function MailClient(MailCustomerRequest $request)
    {
        Mail::send('web.mails.MailClient', $request->all(), function ($msj) use ($request) {
            $msj->from($request->email, $request->name);
            $msj->subject('Mensaje desde celiacomendoza');
            $msj->to('no-respond@celiacomendoza.com', 'CeliacoMendoza');
        });

        Session::flash('message', 'Su mensaje fue enviado correctamente. Muchas gracias!!!');
        return back();
    }
}
