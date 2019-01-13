<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\MailCustomerRequest;
use celiacomendoza\Region;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function list()
    {
//        id 3 es el admin o sea YO
        $commerces = Commerce::with('region')
            ->where('user_id','!=',3)
            ->paginate(12);

        $regions = Region::orderBy('name', 'ASC')
            ->get();

        $posts = Blog::orderBy('created_at', 'DESC')
            ->skip(1)
            ->take(2)
            ->get();

        $postLast = Blog::latest()->first();

        return view('layouts.main', compact('commerces', 'regions', 'posts', 'postLast'));
    }

    public function region($slug)
    {

        $region = Region::where('slug', $slug)
            ->first();

        $commerces = Commerce::with('region')
            ->where('about', '!=', 'NULL')
            ->where('logo', '!=', 'NULL')
            ->where('region_id', $region->id)
            ->paginate(10);


        $regions = Region::orderBy('name', 'ASC')
            ->get();

        return view('web.parts._searchRegion', compact('regions', 'region', 'commerces'));
    }

    public function MailClient(MailCustomerRequest $request)
    {
        Mail::send('web.mails.MailClient', $request->all(), function ($msj) use ($request) {
            $msj->from($request->email, $request->name);
            $msj->subject('Mensaje desde celiacomendoza');
            $msj->to('info@celiacosmendoza.com', 'CeliacoMendoza');
        });

        Session::flash('message', 'Su mensaje fue enviado correctamente. Muchas gracias!!!');
        return back();
    }
}
