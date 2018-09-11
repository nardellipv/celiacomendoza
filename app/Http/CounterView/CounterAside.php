<?php

namespace celiacomendoza\Http\CounterView;

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

        $countMessage = Message::where('commerce_id', $user->id)
            ->count();

        $view->with([
            'countProductsAvailable' => $countProductsAvailable,
            'countProductsDisable' => $countProductsDisable,
            'countMessage' => $countMessage,
        ]);
    }
}