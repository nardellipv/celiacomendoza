<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Category;
use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\MailCustomerRequest;
use celiacomendoza\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CommerceController extends Controller
{
    public function commerce($id)
    {
        $commerce = Commerce::find($id);

        $offers = Product::where('commerce_id', $id)
            ->where('available', 'YES')
            ->where('in_offer', 'YES')
            ->get();

        $highlights = Product::where('commerce_id', $id)
            ->where('highlight', 'YES')
            ->where('available', 'YES')
            ->Limit(10)
            ->get();

        return view('web.catalog', compact('commerce', 'offers', 'highlights'));
    }

    public function contact($id)
    {
        $commerce = Commerce::find($id);

        return view('web.contact', compact('commerce'));
    }

    public function MailCustomer(MailCustomerRequest $request)
    {
        Mail::send('web.mails.MailCustomer', $request->all(), function ($msj) use ($request) {
            $msj->from($request->email, $request->name);
            $msj->subject('Mensaje desde celiacomendoza');
            $msj->to('no-respond@celiacomendoza.com', 'CeliacoMendoza');
        });

        Session::flash('message', 'Su mensaje fue enviado correctamente. Muchas gracias!!!');
        return back();
    }

    public function shop($id)
    {
        $commerce = Commerce::find($id);

        $products = Product::where('commerce_id', $id)
            ->where('available', 'YES')
            ->paginate(10);

        $listCategories = Category::all();

        $lastProducts = Product::where('commerce_id', $id)
            ->orderBy('updated_at', 'DESC')
            ->take(3)
            ->get();

        return view('web.shop', compact('commerce', 'products', 'listCategories', 'lastProducts'));
    }

    public function shopCategory($id, $category_id)
    {
        $commerce = Commerce::find($id);

        $listCategories = Category::all();

        $products = Product::where('commerce_id', $id)
            ->where('available', 'YES')
            ->where('category_id', $category_id)
            ->paginate(10);

        $lastProducts = Product::where('commerce_id', $id)
            ->orderBy('updated_at', 'DESC')
            ->take(3)
            ->get();

        return view('web.shopChooseCategory', compact('commerce', 'lastProducts',
            'listCategories', 'products'));
    }
}
