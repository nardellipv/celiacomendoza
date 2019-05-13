<?php

namespace celiacomendoza\Http\CounterView;

use celiacomendoza\Purchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;

class CounterCart
{
    public function compose(View $view)
    {
        $num_invoice = Cookie::get('id-recibo');

        $cartCount = Purchase::where('num_invoice', $num_invoice)
            ->count();

        $view->with('cartCount', $cartCount);
    }
}