<?php

namespace celiacomendoza\Http\CounterView;

use celiacomendoza\Commerce;
use celiacomendoza\Message;
use celiacomendoza\Product;
use celiacomendoza\User;
use Illuminate\View\View;

class CounterAside
{
    public function compose(View $view)
    {
        $user = User::where('id', auth()->user()->id)
            ->first();

        $countProductsAvailable = Product::where('commerce_id', $user->id)
            ->where('available', 'YES')
            ->count();

        $countProductsDisable = Product::where('commerce_id', $user->id)
            ->where('available', 'NO')
            ->count();

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $countMessage = Message::where('commerce_id', $commerce->id)
            ->where('read', 'NO')
            ->count();

        $view->with([
            'countProductsAvailable' => $countProductsAvailable,
            'countProductsDisable' => $countProductsDisable,
            'countMessage' => $countMessage,
        ]);
    }
}