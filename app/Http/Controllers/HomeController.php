<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Commerce;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list()
    {
        $commerces = Commerce::all();

        return view('layouts.main', compact('commerces'));
    }
}
