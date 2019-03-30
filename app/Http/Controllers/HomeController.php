<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\MailCustomerRequest;
use celiacomendoza\Region;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use DB;

class HomeController extends Controller
{
    public function list()
    {
        $commerces = Commerce::with('region')
            ->where('region_id','!=','NULL')
            ->where('province_id', 50)
            ->orderBy('votes_positive', 'DESC')
            ->paginate(12);

        $regions = Region::orderBy('name', 'ASC')
            ->where('province_id', 50)
            ->get();

        $posts = Blog::orderBy('created_at', 'DESC')
            ->skip(1)
            ->take(2)
            ->get();

        $postLast = Blog::latest()->first();

        return view('web.parts._companies', compact('commerces', 'regions', 'posts', 'postLast'));
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
