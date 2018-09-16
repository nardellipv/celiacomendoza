<?php

namespace celiacomendoza\Http\Controllers\AdminCeliac;

use celiacomendoza\Product;
use celiacomendoza\User;
use Illuminate\Http\Request;
use celiacomendoza\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        $users = User::all();

        $products = Product::all();

        return view('admin.dashboard', compact('users', 'products'));
    }

}
