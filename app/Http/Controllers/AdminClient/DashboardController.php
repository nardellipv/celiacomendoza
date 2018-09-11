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

        $commerce = Commerce::where('user_id', $user->id)
            ->first();

        $productsAvailable = Product::where('commerce_id', $user->id)
            ->where('available', 'YES')
            ->orderBy('created_at', 'DESC')
            ->get();

        $productsDisable = Product::where('commerce_id', $user->id)
            ->where('available', 'NO')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('web.adminClient', compact('user', 'commerce', 'productsAvailable', 'productsDisable'));
    }
}
