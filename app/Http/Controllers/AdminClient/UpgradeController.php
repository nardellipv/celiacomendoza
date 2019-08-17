<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Commerce;
use Illuminate\Http\Request;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Mail;

class UpgradeController extends Controller
{
    public function show()
    {

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        return view('web.parts.adminClient._upgrade', compact('commerce'));
    }

    public function sendMailUpgrade($id)
    {
        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        switch ($id) {
            case 1:
                Mail::send('web.mails.mailUpgrade', ['commerce' => $commerce, 'id' => $id], function ($msj) use ($commerce,$id) {
                    $msj->from('no-respond@celiacosmendoza.com');
                    $msj->subject('upgrade de cuenta');
                    $msj->to('info@celiacosmendoza.com', 'Pablo');
                });
                break;
            case 2:
                Mail::send('web.mails.mailUpgrade', ['commerce' => $commerce, 'id' => $id], function ($msj) use ($commerce,$id) {
                    $msj->from('no-respond@celiacosmendoza.com');
                    $msj->subject('upgrade de cuenta');
                    $msj->to('info@celiacosmendoza.com', 'Pablo');
                });
                break;
            case 3:
                Mail::send('web.mails.mailUpgrade', ['commerce' => $commerce, 'id' => $id], function ($msj) use ($commerce,$id) {
                    $msj->from('no-respond@celiacosmendoza.com');
                    $msj->subject('upgrade de cuenta');
                    $msj->to('info@celiacosmendoza.com', 'Pablo');
                });
                break;
        }

        Session::flash('message', 'Su mensaje fue enviado correctamente. Nos estaremos comunicando con usted. Muchas gracias!!!');
        return back();
    }
}
