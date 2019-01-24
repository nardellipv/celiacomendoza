<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\AbleProduct;
use Illuminate\Http\Request;

class AbleProductController extends Controller
{
    public function listProduct()
    {
        $lists = AbleProduct::paginate(50);

        return view('web.parts._listAbleProduct', compact('lists'));
    }

    public function searchAble(Request $request)
    {
        $search = AbleProduct::where('nombre_comercial', 'like', '%' . $request->search .'%')
            ->orWhere('marca',  'like', '%' . $request->search .'%')
            ->get();

        return view('web.parts._listAbleProductSearch', compact('search'));

    }
}
