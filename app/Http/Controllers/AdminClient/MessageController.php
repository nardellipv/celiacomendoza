<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Category;
use celiacomendoza\Commerce;
use celiacomendoza\Product;
use celiacomendoza\User;
use Illuminate\Http\Request;
use celiacomendoza\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function listmessage()
    {
        $user = User::where('id', auth()->user()->id)
            ->first();

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $countProductsAvailable = Product::where('commerce_id', $user->id)
            ->where('available', 'YES')
            ->count();

        $countProductsDisable = Product::where('commerce_id', $user->id)
            ->where('available', 'NO')
            ->count();

        $categories = Category::all();

        return view('web.parts.adminClient._accountMessage', compact('user', 'commerce', 'countProductsAvailable',
            'countProductsDisable', 'categories'));
    }
}
