<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
use celiacomendoza\CommercePayment;
use celiacomendoza\Http\Requests\MailCustomerRequest;
use celiacomendoza\Province;
use celiacomendoza\Region;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use DB;

class HomeController extends Controller
{
    public function list()
    {
        $commerces = Commerce::with(['region','province'])
            ->orderby('created_at', 'DESC')
            ->take(6)
            ->get();

        /*$regions = Region::orderBy('name', 'ASC')
            ->where('province_id', 50)
            ->get();*/

        $posts = Blog::orderBy('created_at', 'DESC')
            ->take(3)
            ->get();

        $provinces = Province::orderBy('name', 'ASC')
            ->get();

        return view('web.parts._companies', compact('commerces', 'regions', 'posts','provinces'));
    }

    public function region($id)
    {

        $region = Region::where('id', $id)
            ->first();

        $commerces = Commerce::with('region')
            ->where('about', '!=', 'NULL')
            ->where('logo', '!=', 'NULL')
            ->where('region_id', $region->id)
            ->paginate(10);


        $regions = Region::orderBy('name', 'ASC')
            ->where('province_id', 50)
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
