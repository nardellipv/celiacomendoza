<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\CharacteristicCommerce;
use celiacomendoza\Comment;
use celiacomendoza\Commerce;
use celiacomendoza\CommercePayment;
use celiacomendoza\Http\Requests\ClientCommerceRequest;
use celiacomendoza\Http\Controllers\Controller;
use celiacomendoza\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Image;

class CommerceController extends Controller
{
    public function commentRead()
    {
        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $comments = Comment::where('commerce_id', $commerce->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        return view('web.parts.adminClient._readComment', compact('commerce','comments'));
    }

    public function denuncia($id)
    {
        $comment = Comment::find($id);

        Mail::send('web.mails.denunciaComment', ['comment' => $comment], function ($msj) use ($comment) {

            $msj->from('no-respond@celiacosmendoza.com', 'CeliacosMendoza');

            $msj->subject('Denuncia de comentario');

            $msj->to('info@celiacosmendoza.com', 'Info');

        });

        Session::flash('message', 'Gracias por matener una comunidad segura. Verificaremos tu denuncia dentro de las siguientes 24hs.');
        return back();
    }

    public function update(ClientCommerceRequest $request, $id)
    {

        $commerce = Commerce::find($id);

        $payment_id = $request->payment;

        $services = $request->services;

        if ($payment_id) {
            foreach ($payment_id as $payment) {
                $commerceSave = CommercePayment::firstOrNew([
                    'commerce_id' => $commerce->id,
                    'payment_id' => $payment,
                ]);
                $commerceSave->save();
            }
        }

        if ($services) {
            foreach ($services as $service) {
                $servicesSave = CharacteristicCommerce::firstOrNew([
                    'commerce_id' => $commerce->id,
                    'characteristic_id' => $service,
                ]);
                $servicesSave->save();
            }
        }


        //controlo de que sea el mismo comercio que el dueño
        $this->authorize('CommercePass', $commerce);

        $commerce->fill($request->all())->save();

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'images/thumbnail/logo/';
            $img = Image::make($image->getRealPath());
            $img->resize(370, 242)->save($destinationPath . $input['file']);

            $destinationPath = 'images/' . $commerce->name . '-' . $commerce->id . '/logo';
            $image->move($destinationPath, $input['file']);

            $commerce->logo = $input['file'];
        }

        $commerce->update();

        Session::flash('message', 'La información se actualizó correctamente');
        return back();
    }

    public function deletePayment($paymentId, $commerceId)
    {
         $payment = CommercePayment::where('payment_id', $paymentId)
             ->where('commerce_id', $commerceId)
             ->first();
         $payment->delete();

        Session::flash('message', 'La información se actualizó correctamente');
        return back();
    }

    public function deleteService($serviceId, $commerceId)
    {
        $payment = CharacteristicCommerce::where('characteristic_id', $serviceId)
            ->where('commerce_id', $commerceId)
            ->first();
        $payment->delete();

        Session::flash('message', 'La información se actualizó correctamente');
        return back();
    }

    public function commerceAvailable($id)
    {
        $user = User::find($id);
        $user->type = 'OWNER';
        $user->save();

        Session::flash('message', 'Se actualizó su cuenta a Comercio, por favor complete los siguientes datos');
        return back();
    }
}
