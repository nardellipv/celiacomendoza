<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Characteristic;
use celiacomendoza\CharacteristicCommerce;
use celiacomendoza\Commerce;
use celiacomendoza\CommercePayment;
use celiacomendoza\Payment;
use celiacomendoza\Product;
use celiacomendoza\Region;
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

        $regions = Region::all();

        $productsAvailable = Product::where('commerce_id', $user->id)
            ->where('available', 'YES')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $productsDisable = Product::where('commerce_id', $user->id)
            ->where('available', 'NO')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $payments = Payment::all();

        $paymentsCommerce = CommercePayment::with('payment')
            ->where('commerce_id', $commerce->id)
            ->get();

        $characteristics = Characteristic::all();

        $characteristicsCommerce = CharacteristicCommerce::with('characteristic')
            ->where('commerce_id', $commerce->id)
            ->get();

        return view('web.adminClient', compact('user', 'commerce', 'productsAvailable', 'productsDisable',
            'regions', 'payments', 'characteristics', 'paymentsCommerce', 'characteristicsCommerce'));
    }
}
