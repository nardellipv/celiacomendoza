<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Commerce;
use celiacomendoza\Purchase;
use Illuminate\Http\Request;
use celiacomendoza\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    public function list()
    {
        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $purcharses = Purchase::where('commerce_id', $commerce->id)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('web.parts.adminClient._productsSell', compact('commerce', 'purcharses'));
    }
}
