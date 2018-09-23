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
        $commerces = Commerce::paginate(12);

        $regions = Region::all();

        $posts = Blog::orderBy('created_at', 'DESC')
            ->take(4)
            ->get();

        return view('layouts.main', compact('commerces', 'regions','posts'));
    }

    public function region($slug)
    {

        $region = Region::where('slug', $slug)
            ->first();

        $commerces = Commerce::where('about', '!=', 'NULL')
            ->where('logo', '!=', 'NULL')
            ->where('region_id', $region->id)
            ->paginate(10);


        $allRegion = Region::all();

        return view('web.parts._searchRegion', compact('region', 'allRegion', 'commerces'));
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
