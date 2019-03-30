<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\CharacteristicCommerce;
use celiacomendoza\Commerce;
use celiacomendoza\CommercePayment;
use celiacomendoza\Http\Requests\ClientCommerceRequest;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;

class CommerceController extends Controller
{
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
            $img->resize(300, 300)->save($destinationPath . $input['file']);

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
}
