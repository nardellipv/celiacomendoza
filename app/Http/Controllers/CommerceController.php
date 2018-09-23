<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Category;
use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\MailCustomerRequest;
use celiacomendoza\Message;
use celiacomendoza\Product;
use celiacomendoza\Region;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CommerceController extends Controller
{
    public function commerce($slug)
    {
        $commerce = Commerce::where('slug', $slug)
            ->first();

        $offers = Product::where('commerce_id', $commerce->id)
            ->where('available', 'YES')
            ->where('in_offer', 'YES')
            ->get();

        $highlights = Product::where('commerce_id', $commerce->id)
            ->where('highlight', 'YES')
            ->where('available', 'YES')
            ->Limit(10)
            ->get();

        $regions = Region::all();

        return view('web.catalog', compact('commerce', 'offers', 'highlights','regions'));
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

    public function shop($slug)
    {
        $commerce = Commerce::where('slug', $slug)
            ->first();

        $products = Product::where('commerce_id', $commerce->id)
            ->where('available', 'YES')
            ->paginate(10);

        $listCategories = Category::all();

        $lastProducts = Product::where('commerce_id', $commerce->id)
            ->orderBy('updated_at', 'DESC')
            ->take(3)
            ->get();

        return view('web.shop', compact('commerce', 'products', 'listCategories', 'lastProducts'));
    }

    public function shopCategory($slug, $category_id)
    {
        $commerce = Commerce::where('slug', $slug)
            ->first();

        $listCategories = Category::all();

        $products = Product::where('commerce_id', $commerce->id)
            ->where('available', 'YES')
            ->where('category_id', $category_id)
            ->paginate(10);

        $lastProducts = Product::where('commerce_id', $commerce->id)
            ->orderBy('updated_at', 'DESC')
            ->take(3)
            ->get();

        return view('web.shopChooseCategory', compact('commerce', 'lastProducts',
            'listCategories', 'products'));
    }
}
