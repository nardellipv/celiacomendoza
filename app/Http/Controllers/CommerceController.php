<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Commerce;
use celiacomendoza\Product;
use Illuminate\Http\Request;

class CommerceController extends Controller
{
    public function commerce($id)
    {
        $commerce = Commerce::find($id);

        $offers = Product::where('commerce_id', $id)
            ->where('in_offer', 'YES')
            ->get();

        return view('web.catalog', compact('commerce', 'offers'));
    }
}
