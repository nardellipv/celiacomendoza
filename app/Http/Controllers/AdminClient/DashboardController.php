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
use Cookie;
use Illuminate\Support\Facades\Request;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $user = User::where('id', auth()->user()->id)
            ->first();

        $productAvailable = Product::where('commerce_id', $user->id)
            ->where('available', 'YES')
            ->count();

        $productUnAvailable = Product::where('commerce_id', $user->id)
            ->where('available', 'NO')
            ->count();

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $regions = Region::where('province_id', $commerce->province_id)
            ->get();

        $payments = Payment::all();

        $paymentsCommerce = CommercePayment::with('payment')
            ->where('commerce_id', $commerce->id)
            ->get();

        $characteristics = Characteristic::all();

        $characteristicsCommerce = CharacteristicCommerce::with('characteristic')
            ->where('commerce_id', $commerce->id)
            ->get();

        Cookie::queue('register','registrado', '60');

        return view('web.parts.adminClient.dashboard._dashboard', compact('productAvailable', 'productUnAvailable', 'commerce',
            'payments', 'paymentsCommerce', 'characteristics', 'characteristicsCommerce', 'regions', 'user'));
    }

    public function profile()
    {
        $user = User::where('id', auth()->user()->id)
            ->first();

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        return view('web.parts.adminClient._profile', compact('user', 'commerce'));
    }

    public function available()
    {

        $user = User::where('id', auth()->user()->id)
            ->first();

        $commerce = Commerce::where('user_id', $user->id)
            ->first();

        $productsAvailable = Product::where('commerce_id', $user->id)
            ->where('available', 'YES')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);


        return view('web.parts.adminClient._productsAvailable', compact('user', 'commerce', 'productsAvailable'));
    }

    public function unAvailable()
    {
        $user = User::where('id', auth()->user()->id)
            ->first();

        $commerce = Commerce::where('user_id', $user->id)
            ->first();

        $productsDisable = Product::where('commerce_id', $user->id)
            ->where('available', 'NO')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('web.parts.adminClient._productsDisable', compact('user', 'commerce', 'productsDisable'));
    }
}
