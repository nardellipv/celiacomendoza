<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Category;
use celiacomendoza\CharacteristicCommerce;
use celiacomendoza\Commerce;
use celiacomendoza\Commerce_Payment;
use celiacomendoza\CommercePayment;
use celiacomendoza\Http\Requests\MailCustomerRequest;
use celiacomendoza\Message;
use celiacomendoza\Payment;
use celiacomendoza\Product;
use celiacomendoza\Region;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CommerceController extends Controller
{
    public function commerce($slug)
    {
        $commerce = Commerce::where('slug', $slug)
            ->first();

        $products = Product::where('commerce_id', $commerce->id)
            ->where('available', 'YES')
            ->paginate(10);

        $commercePayment = CommercePayment::with(['payment'])
            ->where('commerce_id', $commerce->id)
            ->get();

        $characteristicCommerces = CharacteristicCommerce::with('characteristic')
            ->where('commerce_id', $commerce->id)
            ->get();

        return view('web.catalog', compact('commerce', 'products', 'commercePayment',
            'characteristicCommerces'));
    }

    public function contact($slug)
    {
        $commerce = Commerce::where('slug', $slug)
            ->first();

        return view('web.contact', compact('commerce'));
    }

    public function MailCustomer(MailCustomerRequest $request, $id)
    {

        $commerce = Commerce::where('id', $id)
            ->first();

        $message = new Message;
        $message->name = $request['name'];
        $message->email = $request['email'];
        $message->message = $request['messageCustomer'];
        $message->read = 'NO';
        $message->commerce_id = $id;
        $message->save();

        Mail::send('web.mails.MailCustomer', $request->all(), function ($msj) use ($request, $commerce) {
            $msj->from('no-respond@celiacosmendoza.com', 'CeliacosMendoza');
            $msj->subject('Mensaje desde celiacomendoza');
            $msj->to($commerce->user->email, $commerce->user->name);
        });

        Session::flash('message', 'Su mensaje fue enviado correctamente. Muchas gracias!!!');
        return back();
    }

    public function positive($slug)
    {


        $commerce = Commerce::where('slug', $slug)
            ->first();

        if (Cookie::get('voto' . $commerce->slug) == $slug) {
            Session::flash('message', 'Ya votaste anteriormente a este comercio');
            return back();
        }

        $commerce->increment('votes_positive');
        $commerce->save();

        Cookie::queue('voto' . $commerce->slug, $commerce->slug, '2628000');

        Session::flash('message', 'Muchas gracias por tu voto');
        return back();
    }

    public function negative($slug)
    {
        $commerce = Commerce::where('slug', $slug)
            ->first();

        if (Cookie::get('voto' . $commerce->slug) == $slug) {
            Session::flash('message', 'Ya votaste anteriormente a este comercio');
            return back();
        }

        $commerce->increment('votes_negative');
        $commerce->save();

        Cookie::queue('voto', $commerce->slug);

        Session::flash('message', 'Muchas gracias por tu voto');
        return back();
    }
}
