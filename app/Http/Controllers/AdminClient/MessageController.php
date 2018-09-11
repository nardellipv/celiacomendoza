<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Category;
use celiacomendoza\Commerce;
use celiacomendoza\Message;
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

        $messages = Message::where('commerce_id', $user->id)
            ->get();

//        $commerce = Commerce::where('user_id', auth()->user()->id)
//            ->first();



        return view('web.parts.adminClient._accountMessage', compact('user','messages'));
    }
}
