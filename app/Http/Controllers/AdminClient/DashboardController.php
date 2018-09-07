<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Commerce;
use celiacomendoza\Product;
use celiacomendoza\User;
use celiacomendoza\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = User::where('id', auth()->user()->id)
            ->first();

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $productsAvailable = Product::where('commerce_id', $commerce->id)
            ->where('available', 'YES')
            ->get();

        $countProductsAvailable = Product::where('commerce_id', $commerce->id)
            ->where('available', 'YES')
            ->count();

        $productsDisable = Product::where('commerce_id', $commerce->id)
            ->where('available', 'NO')
            ->get();

        $countProductsDisable = Product::where('commerce_id', $commerce->id)
            ->where('available', 'NO')
            ->count();

        return view('web.adminClient', compact('user', 'commerce', 'productsAvailable','countProductsAvailable',
            'productsDisable', 'countProductsDisable'));
    }
}
