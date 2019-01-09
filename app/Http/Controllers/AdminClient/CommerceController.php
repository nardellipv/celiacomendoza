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

        if($payment_id) {
            foreach ($payment_id as $value) {
//            compruebo que no este en la base el usuario y concepto
                $existPayment = CommercePayment::where('commerce_id', $commerce->id)
                    ->where('payment_id', $payment_id)
                    ->first();

                if (!$existPayment) {
                    $commercePayment = new CommercePayment();
                    $commercePayment->commerce_id = $commerce->id;
                    $commercePayment->payment_id = $value;
                    $commercePayment->save();
                }
            }
        }

        if($services) {
            foreach ($services as $valueCharacteristic) {
//            compruebo que no este en la base el usuario y concepto
                $existCharacteristic = CharacteristicCommerce::where('commerce_id', $commerce->id)
                    ->where('characteristic_id', $services)
                    ->first();

                if (!$existCharacteristic) {
                    $commerceCharacteristic = new CharacteristicCommerce();
                    $commerceCharacteristic->commerce_id = $commerce->id;
                    $commerceCharacteristic->characteristic_id = $valueCharacteristic;
                    $commerceCharacteristic->save();
                }
            }
        }

        //controlo de que sea el mismo comercio que el dueño
        $this->authorize('CommercePass', $commerce);

        $commerce->fill($request->all())->save();

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = 'images/thumbnail/logo/';
            $img = Image::make($image->getRealPath());
            $img->resize(300, 300)->save($destinationPath.$input['file']);

            $destinationPath = 'images/'.$commerce->name.'-'.$commerce->id.'/logo';
            $image->move($destinationPath, $input['file']);

            $commerce->logo = $input['file'];
        }

        $commerce->update();

        Session::flash('message', 'La información se actualizó correctamente');
        return back();
    }
}
